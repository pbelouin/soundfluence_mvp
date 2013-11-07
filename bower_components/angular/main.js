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


App.controller('contactCtrl', function($scope, $location, $http) {

});

App.controller('legalCtrl', function($scope, $location, $http) {

});


App.config(['$locationProvider','$routeProvider',
  function($locationProvider,$routeProvider) {
    //$locationProvider.html5Mode(true);
    $routeProvider.
      when('/contact', {
        templateUrl: 'bower_components/angular/templates/contact.html',
        controller: 'contactCtrl'
      }).
      when('/legal', {
        templateUrl: 'bower_components/angular/templates/legal.html',
        controller: 'legalCtrl'
      }).
      otherwise({
        templateUrl: 'bower_components/angular/templates/main.html',
        controller: 'Ctrl'
      });
  }]);