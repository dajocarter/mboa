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

mboa.controller('HomeController', function($scope) {
  console.log('HomeController has been loaded.');
  $scope.pageTitle = "My Brain on Anatomy";
});

mboa.controller('PreTestController', function($scope, Problems) {
  console.log('PreTestController has been loaded.');
  $pageTitle = "Pre-Test";
  $scope.problems = Problems;
});

mboa.controller('RefsController', function($scope, $stateParams, References) {
  console.log('RefsController has been loaded.');
  var caseName = $stateParams.caseName;
  $scope.caseName = caseName;
  $scope.pageTitle = caseName + " | References";
  $scope.refs = References[caseName].refs;
  $scope.creds = References[caseName].creds;
});

mboa.controller('PageController', function($scope) {
  console.log('PageController has been loaded.');
});