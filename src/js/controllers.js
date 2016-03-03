angular.module('mboa').controller('HomeController', function($scope) {
  console.log('HomeController has been loaded.');
  $scope.pageTitle = "My Brain on Anatomy";
});

angular.module('mboa').controller('PreTestController', function($scope, Problems) {
  console.log('PreTestController has been loaded.');
  $pageTitle = "Pre-Test";
  $scope.problems = Problems;

  var ref = new Firebase('https://brilliant-heat-5271.firebaseio.com/');
  $scope.submitForm = function() {
    for (var i = $scope.problems.length - 1; i >= 0; i--) {
      var problem = Problems[i];
      for (var j = problem.options.length - 1; j >= 0; j--) {
        var choice = problem.options[j];
        if (choice['chosen']) {
          var question = i + 1;
          var answer = choice['choice'];
          ref.child(question).child(answer).transaction(function(count) {
            return count + 1;
          });
        }
      }
    }
  };
});

angular.module('mboa').controller('RefsController', function($scope, $stateParams, References) {
  console.log('RefsController has been loaded.');
  var caseName = $stateParams.caseName;
  $scope.caseName = caseName;
  $scope.pageTitle = caseName + " | References";
  $scope.refs = References[caseName].refs;
  $scope.creds = References[caseName].creds;
});

angular.module('mboa').controller('PageController', function($scope, $state) {
  console.log('PageController has been loaded.');
  console.log('state is', $state);
});