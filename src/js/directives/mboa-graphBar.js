angular.module('mboa').directive('mboaGraphBar', function() {
  var fb = new Firebase('https://brilliant-heat-5271.firebaseio.com/responses');

  return {
    restrict: 'E',
    template: '<div class="graph-bar clearfix"><div ng-show="show" class="graph-bar-outline"><div ng-class="{green: right, red: !right}" class="graph-bar-color"></div></div><span ng-show="show" class="graph-bar-percent"></span></div>',
    scope: {
      correct: '@',
      problem: '@',
      option: '@',
      submitted: '@'
    },
    link: function(scope, element, attrs) {
      attrs.$observe('submitted', function(value) {
        if (scope.$eval(value)) {
          scope.show = true;

          var keys = ['one', 'two', 'three', 'four', 'five'];
          var problem = scope.$eval(attrs.problem);
          var option = scope.$eval(attrs.option)['choice'];

          fb.child(keys[problem]).once('value', function(snap) {
            var snap = snap.val();
            var denom = snap.total;
            var numer = snap[option];
            var percent = numer ? ((numer / denom) * 100) : 0;
            var roundedPercent = Number(Math.round(percent + 'e3') + 'e-3').toFixed(3);
            angular.element(element).find('span').text(roundedPercent + "%");
            var colorWidth = (percent * 2) + 'px';
            angular.element(element[0].querySelector('.graph-bar-color')).css({
              width: colorWidth
            });
          });

          scope.right = scope.$eval(attrs.correct) ? true : false;
          /*angular.element(element[0].querySelector('.graph-bar-color')).addClass(color);*/
        }
      })
    }
  };
});