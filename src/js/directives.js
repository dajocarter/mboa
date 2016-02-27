mboa.directive('mfp', function() {
  return {
    restrict: 'A',
    link: function(scope, element, attrs) {
      var defaults = {
          midClick: true,
          closeBtnInside: false
        },
        options;
      switch (scope.$eval(attrs.mfp)["type"]) {
        case 'image':
          var imageDefaults = {
            closeOnContentClick: true,
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
          break;
        case 'iframe':
          var iframeDefaults = {
            preloader: false,
            fixedContentPos: false,
            removalDelay: 160,
            mainClass: 'mfp-fade'
          };
          options = angular.merge({}, iframeDefaults, defaults, scope.$eval(attrs.mfp));
          break;
        default:
          options = angular.extend({}, defaults, scope.$eval(attrs.mfp));
      }

      $(element).magnificPopup(options);
    }
  };
});