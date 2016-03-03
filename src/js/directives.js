angular.module('mboa').directive('mfp', function() {
  return {
    restrict: 'A',
    link: function(scope, element, attrs) {
      var defaults = {
          midClick: true,
          closeBtnInside: false
        },
        typeDefaults = {},
        options = {};
      switch (scope.$eval(attrs.mfp)["type"]) {
        case 'image':
          typeDefaults = {
            closeOnContentClick: true,
            fixedContentPos: true,
            mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
            image: {
              verticalFit: true
            },
            zoom: {
              enabled: true,
              duration: 300 // don't forget to change the duration also in CSS
            }
          };
          break;
        case 'iframe':
          typeDefaults = {
            preloader: false,
            fixedContentPos: false,
            removalDelay: 160,
            mainClass: 'mfp-fade'
          };
          break;
      }
      options = angular.merge({}, typeDefaults, defaults, scope.$eval(attrs.mfp));

      $(element).magnificPopup(options);
    }
  };
});