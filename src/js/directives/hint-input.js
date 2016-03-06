angular.module('mboa').directive('hintInput', function(Answers, Hints) {
  return {
    restrict: 'E',
    require: 'ngModel',
    templateUrl: '../../../templates/hint-input.html',
    link: function(scope, element, attrs, ngModelCtrl) {
      var answer = Answers[attrs.answer];
      var hint = Hints[attrs.hint];
      var toggleHint = function() {
        scope.showHint = !scope.showHint;
      }
      var toggleCorrect = function(right) {
        if (right) {
          scope.correct = true;
          scope.showHint = false;
        } else {
          scope.correct = false;
        }
      };
      var gradeAnswer = function(newVal, oldVal) {
        if (typeof answer == "string") {
          if (newVal.toUpperCase() == ans.toUpperCase()) {
            toggleCorrect(true);
          } else {
            toggleCorrect(false);
          }
        } else if (Array.isArray(answer)) {
          var correct = false;
          for (var i = answer.length - 1; i >= 0; i--) {
            if (newVal.toUpperCase() == answer[i].toUpperCase()) {
              toggleCorrect(true);
              correct = true;
            }
          }
          if (!correct) toggleCorrect(false);
        }
      };

      scope.hint = hint;
      scope.showHint = false;
      scope.correct = false;
      scope.userAnswer = "";

      scope.toggleHint = toggleHint;
      scope.$watch(function() {
        return ngModelCtrl.$modelValue;
      }, gradeAnswer);
    }
  };
});