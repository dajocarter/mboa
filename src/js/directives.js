mboa.directive('mfp', function() {
  return {
    restrict: 'A',
    link: function(scope, element, attrs) {
      var defaults = {
          midClick: true
        },
        options = angular.extend({}, defaults, scope.$eval(attrs.mfp));

      $(element).magnificPopup(options);
    }
  };
});