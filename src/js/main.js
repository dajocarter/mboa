var mboa = angular.module('mboa', ['ui.router']);

/********** GLOBAL **********/
mboa.run(function($rootScope) {
  $rootScope.SITE = {
    baseUrl: 'http://mybrainonanatomy.com',
    name: 'My Brain On Anatomy',
    currentYear: new Date()
  };
});

/********** ROUTING **********/
mboa.config(function($locationProvider, $stateProvider, $urlRouterProvider) {
  $locationProvider.html5Mode(true);

  $stateProvider
    .state('home', {
      url: '/',
      templateUrl: '../../templates/index.html',
      controller: 'HomeController'
    })
    .state('preTest', {
      url: '/Pre-Test/',
      templateUrl: '../../Pre-Test/index.html',
      controller: 'PreTestController'
    })
    .state('learningObjs', {
      url: '/Learning-Objectives/',
      templateUrl: '../../Learning-Objectives/index.html'
    })
    .state('references', {
      url: '/:caseName/references',
      templateUrl: '../../templates/references.html',
      controller: 'RefsController'
    })
    .state('page', {
      url: '/:caseName/:pageType/:pageId',
      templateUrl: function($stateParams) {
        return '../../' + $stateParams.caseName + '/' + $stateParams.pageType + '/' + $stateParams.pageId + '.html';
      },
      controller: 'PageController'
    })

  $urlRouterProvider.otherwise('/');
});

mboa.filter('isTrusted', function($sce) {
  return function(text) {
    return $sce.trustAsHtml(text);
  };
});

mboa.filter('stripSlug', function() {
  return function(text) {
    if (text) var newText = text.replace(/-/g, " ");
    return newText;
  };
});

});