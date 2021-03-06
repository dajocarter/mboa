angular.module('mboa').config(function($locationProvider, $urlMatcherFactoryProvider, $stateProvider, $urlRouterProvider) {

  // Case-insensitive router
  $urlMatcherFactoryProvider.caseInsensitive(true);
  $urlMatcherFactoryProvider.strictMode(false);

  // Gets rid of # in URL
  $locationProvider.html5Mode(true);

  $stateProvider
    .state('home', {
      url: '/',
      templateUrl: '../../templates/index.html'
    })
    .state('preTest', {
      url: '/pre-test/',
      templateUrl: '../../templates/pre-test.html',
      controller: 'PreTestController'
    })
    .state('learningObjs', {
      url: '/learning-objectives/',
      templateUrl: '../../templates/learning-objectives.html'
    })
    .state('histoCase', {
      url: '/:caseName',
      abstract: true,
      templateUrl: '../../templates/case-index.html',
      controller: function($stateParams) {
        this.caseName = $stateParams.caseName;
      },
      controllerAs: 'histoCase'
    })
    .state('references', {
      url: '/:caseName/references',
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
      templateUrl: function($stateParams) {
        return '../../templates/' + $stateParams.caseName + '/' + $stateParams.pageType + '/' + $stateParams.pageId + '.html';
      },
      controller: 'CaseController'
    })
    .state('404server', {
      templateUrl: '../../templates/404.html'
    })
    .state('404client', {
      url: '*path',
      templateUrl: '/../../templates/404.html'
    });
});