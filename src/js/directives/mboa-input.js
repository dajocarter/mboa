angular.module('mboa').directive('mboaInput', function(Answers, Hints, $uibModal) {
  function getTemplate(tElt, tAttrs) {
    var alertTA = "<textarea class='check-input'></textarea><i class='icon ion-alert-circled input' ng-click='openHint()'></i>";
    var alertInput = "<input type='text' class='check-input' /><i class='icon ion-alert-circled input'></i>";
    var gradedInput = "<input type='text' ng-model='bindedModel' ng-change='gradeAnswer(bindedModel)' class='check-input' /><i ng-class='{show: correct}' class='icon ion-ios-checkmark input'></i>";
    var hintInput = "<input type='text' ng-model='bindedModel' ng-change='gradeAnswer(bindedModel)' class='check-input'><i ng-class='{show: !showHint && !correct}' class='icon ion-ios-help-empty input' ng-click='openHint()'></i><i ng-class='{show: correct}' class='icon ion-ios-checkmark input'></i>";

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
      hint: '&',
      bindedModel: '=ngModel'
    },
    template: getTemplate,
    link: function(scope, element, attrs, ngModel) {

      if (attrs.answer >= 0) var answer = Answers[attrs.answer];

      var toggleCorrect = function(right) {
        if (right) {
          scope.correct = true;
          angular.element(element).find('input').addClass('correct');
        } else {
          scope.correct = false;
          angular.element(element).find('input').removeClass('correct');
        }
      };

      scope.correct = false;

      scope.gradeAnswer = function(userValue) {
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


      if (attrs.hint >= 0) {
        scope.hint = {
          title: (attrs.type == "input") ? 'Hint' : 'Answer',
          text: Hints[attrs.hint]
        };
      }

      scope.openHint = function() {
        $uibModal.open({
          ariaLabelledBy: 'modal-title',
          ariaDescribedBy: 'modal-body',
          templateUrl: '../../templates/modal-content.html',
          controller: 'ModalInstanceController',
          resolve: {
            hint: function () {
              return scope.hint;
            }
          }
        });
      };
    }
  };
});