mboa.directive('mfp', function() {
  return {
    restrict: 'A',
    link: function(scope, element, attrs) {
      var defaults = {
          midClick: true
        },
        options;
      if (scope.$eval(attrs.mfp)["type"] == 'image') {
        var imageDefaults = {
          closeOnContentClick: true,
          closeBtnInside: false,
          fixedContentPos: true,
          mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
          image: {
            verticalFit: true
          },
          zoom: {
            enabled: true,
            duration: 300 // don't forget to change the duration also in CSS
          }
        };
        options = angular.merge({}, imageDefaults, defaults, scope.$eval(attrs.mfp));
      } else {
        options = angular.extend({}, defaults, scope.$eval(attrs.mfp));
      }

      $(element).magnificPopup(options);
    }
  };
});