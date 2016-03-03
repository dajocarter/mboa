angular.module('mboa', ['ui.router', 'firebase'])

/********** GLOBAL **********/
.run(function($rootScope, $state, $stateParams, $anchorScroll) {
  $rootScope.SITE = {
    baseUrl: 'http://mybrainonanatomy.com',
    name: 'My Brain On Anatomy',
    currentYear: new Date()
  };

  $rootScope.$on('$stateChangeSuccess', function() {
    $anchorScroll();
  });

  $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
    var redirectPairs = {
      'A-Mysterious-Mass': {
        'thymus': '2',
        'primary': '3',
        'epi-cells': '4',
        'adaptive': '5',
        'medulla': '6'
      },
      'A-Night-in-the-ER': {
        'ur': '2',
        'CTscan': '4',
        'flow3': '5',
        'secondary': '6',
        't-lymph': '7'
      },
      'The-Suspicious-Lesion': {
        'lymph-node': '2',
        'secondary': '3',
        'type3': '4',
        'axillary': '5',
        'paracortex': '6',
        'flow4': '8',
        'lymphedema': '9',
        'stage2': '10'
      }
    };
    if (toState.name == "histoCase.pageType.page") {
      // Check if we're redirecting an 'ans' page to a 'pg' page
      if (toParams.pageType == 'ans') {
        for (var caseName in redirectPairs) {
          if (redirectPairs.hasOwnProperty(caseName)) {
            if (toParams.caseName == caseName) {
              for (var page in redirectPairs[caseName]) {
                if (toParams.pageId == page) {
                  event.preventDefault();
                  $state.go('histoCase.pageType.page', {
                    caseName: fromParams.caseName,
                    pageType: 'pg',
                    pageId: redirectPairs[caseName][page]
                  });
                }
              }
            }
          }
        }
      }
      // Check if we're going from a case page to a case page
      // This will save us from having to include the case name in ui-sref
      if (fromState == "histoCase.pageType.pageId") {
        event.preventDefault();
        $state.go('histoCase.pageType.page', {
          caseName: fromParams.caseName,
          pageType: toParams.pageType,
          pageId: toParams.pageId
        });
      }
    }
  });
});