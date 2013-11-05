var App = angular.module('module', []);


// Set up a controller and define a model
App.controller('Ctrl', function($scope, $location, $http) {

  $scope.submit = function () {
      console.log($scope.user);

      $http.post('index.php/users/create', $scope.user)
        .success(function(data, status, headers) {
          $scope.success = true;
          console.log($scope.success);
        })
        .error(function(data, status, headers) {
          $scope.success = false;
          console.log($scope.success);
      });

  };


});
