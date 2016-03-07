angular.module('mboa').directive('mboaInput', function(Answers, Hints) {
  function getTemplate(tElt, tAttrs) {
    var alertTA = "<textarea class='check-input'></textarea><i class='icon ion-alert-circled input'></i>";
    var alertInput = "<input type='text' class='check-input' /><i class='icon ion-alert-circled input'></i>";
    var gradedInput = "<input type='text' ng-model='userAnswer' ng-change='gradeAnswer(userAnswer)' class='check-input' /><i ng-show='correct' class='icon ion-ios-checkmark input'></i>";
    var hintInput = "<input type='text' ng-model='userAnswer' ng-change='gradeAnswer(userAnswer)' class='check-input'><i ng-hide='showHint || correct' class='icon ion-ios-help-empty input' ng-click='toggleHint()'></i><i ng-show='correct' class='icon ion-ios-checkmark input'></i><div ng-show='showHint' class='hint'>{{hint}}<i class='icon ion-ios-close' ng-click='toggleHint()'></i></div>"

    if (tAttrs.type == "textarea") {
      return alertTA;
    } else if (tAttrs.type == "input") {
      switch (tAttrs.feedback) {
        case "alert":
          return alertInput;
          break;
        case "graded":
          return gradedInput;
          break;
        case "hint":
          return hintInput;
          break;
      }
    }
  }

  return {
    restrict: 'E',
    require: 'ngModel',
    scope: {
      answer: '&',
      hint: '&'
    },
    template: getTemplate,
    link: function(scope, element, attrs, ngModel) {

      if (attrs.answer >= 0) var answer = Answers[attrs.answer];

      var toggleCorrect = function(right) {
        if (right) {
          scope.correct = true;
          scope.showHint = false;
        } else {
          scope.correct = false;
        }
      };

      scope.correct = false;
      scope.userAnswer = "";

      scope.gradeAnswer = function(userValue) {
        console.log(userValue);
        if (userValue) {
          if (typeof answer == "string") {
            if (userValue.toUpperCase() == answer.toUpperCase()) {
              toggleCorrect(true);
            } else {
              toggleCorrect(false);
            }
          } else if (Array.isArray(answer)) {
            var correct = false;
            for (var i = answer.length - 1; i >= 0; i--) {
              if (userValue.toUpperCase() == answer[i].toUpperCase()) {
                toggleCorrect(true);
                correct = true;
              }
            }
            if (!correct) toggleCorrect(false);
          }
        }
      };


      if (attrs.hint >= 0) scope.hint = Hints[attrs.hint];

      scope.showHint = false;
      scope.toggleHint = function() {
        scope.showHint = !scope.showHint;
      };
    }
  };
});