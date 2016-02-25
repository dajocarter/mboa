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

mboa.controller('PageController', function($scope, $state) {
  console.log('PageController has been loaded.');
  console.log('state is', $state);
});