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
    .state('histoCase', {
      url: '/:caseName',
      abstract: true,
      template: '<ui-view/>'
    })
    .state('histoCase.references', {
      url: '/references',
      templateUrl: '../../templates/references.html',
      controller: 'RefsController'
    })
    .state('histoCase.pageType', {
      url: '/:pageType',
      abstract: true,
      template: '<ui-view/>'
    })
    .state('histoCase.pageType.page', {
      url: '/:pageId',
      controller: 'PageController',
      templateUrl: function($stateParams) {
        return '../../' + $stateParams.caseName + '/' + $stateParams.pageType + '/' + $stateParams.pageId + '.html';
      }
    });

  $urlRouterProvider.otherwise('/');
});