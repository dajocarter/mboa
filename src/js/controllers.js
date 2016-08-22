angular.module('mboa').controller('HomeController', function($scope) {
  $scope.pageTitle = "My Brain on Anatomy";
});

angular.module('mboa').controller('PreTestController', function($scope, Problems) {
  $pageTitle = "Pre-Test";

  $scope.problems = Problems;

  $scope.submitForm = function() {
    $scope.submitted = true;
    var keys = ['one', 'two', 'three', 'four', 'five'];

    for (var i = 0; i < $scope.problems.length; i++) {
      var problem = $scope.problems[i];
      for (var j = 0; j < problem.options.length; j++) {
        var choice = problem.options[j];
        if (choice['chosen']) {
          firebase.database().ref('responses').child(keys[i]).child('total').transaction(function(count) {
            return count + 1;
          });
          firebase.database().ref('responses').child(keys[i]).child(choice.choice).transaction(function(count) {
            return count + 1;
          });
        }
      }
    }
  };
});

angular.module('mboa').controller('RefsController', function($scope, $stateParams, References) {
  var caseName = $stateParams.caseName;
  $scope.caseName = caseName;
  $scope.pageTitle = caseName + " | References";
  $scope.refs = References[caseName].refs;
  $scope.creds = References[caseName].creds;
});

angular.module('mboa').controller('ModalInstanceController', function ($scope, $uibModalInstance, hint) {
  $scope.hint = hint;
  $scope.close = function () {
    $uibModalInstance.close();
  };
});