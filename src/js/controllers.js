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

angular.module('mboa').controller('fileUploadController', function($scope, $stateParams, $timeout) {
  var auth = firebase.auth();
  var databaseRef = firebase.database().ref();
  var storageRef = firebase.storage().ref();

  function handleFileSelect(evt) {
    evt.stopPropagation();
    evt.preventDefault();
    var file = evt.target.files[0];
    var metadata = {
      'contentType': file.type
    };
    storageRef.child('images/' + $stateParams.caseName + '/' + file.name).put(file, metadata).then(function(snapshot) {
      console.log('Uploaded', snapshot.totalBytes, 'bytes.');
      console.log(snapshot.metadata);

      var newImgKey = databaseRef.child('images/' + $stateParams.caseName).push({
        url: snapshot.metadata.downloadURLs[0],
        fullPath: snapshot.metadata.fullPath,
        name: snapshot.metadata.name,
        size: snapshot.metadata.size,
        type: snapshot.metadata.type,
      }).then(function(snapshot) {
        console.log('saved image to database', snapshot);
      }).catch(function(error) {
        console.log('error saving img data to db', error);
      });

      var url = snapshot.metadata.downloadURLs[0];
      console.log('File available at', url);
      document.getElementById('linkbox').innerHTML = '<a href="' +  url + '">Click For File</a>';
    }).catch(function(error) {
      console.error('Upload failed:', error);
    });
  }

  var images = [];
  databaseRef.child('images/' + $stateParams.caseName).on('child_added', function(snapshot) {
    images.push(snapshot.val());
    $timeout(function() {
      $scope.images = images;
    });
  });



  window.onload = function() {
    document.getElementById('file').addEventListener('change', handleFileSelect, false);
    document.getElementById('file').disabled = true;
    auth.onAuthStateChanged(function(user) {
      if (user) {
        console.log('Anonymous user signed-in.', user);
        document.getElementById('file').disabled = false;
      } else {
        console.log('There was no anonymous session. Creating a new anonymous user.');
        // Sign the user in anonymously since accessing Storage requires the user to be authorized.
        auth.signInAnonymously();
      }
    });
  }
});