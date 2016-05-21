//Controllers ---------------------------------------------->

    // create the module and named it kodeKiwiApp
    // also include ngRoute for all our routing needs
var brewApp = angular.module('brewApp', ['ngRoute']);
    // create the module and name it scotchApp
    // configure our routes
    brewApp.config(function($routeProvider) {
        $routeProvider
              // route for the home page
            .when('/', {
                templateUrl : 'views/home.php',
                controller  : 'homeController'
            })
            // route for the editor and chat page

            .when('/recipes', {
                templateUrl : 'views/recipes.php',
                controller  : 'recipesController'
            })
            // route for the stats page
            .when('/newRecipe', {
                templateUrl : 'views/newRecipe.php',
                controller  : 'newRecipeController'
            });
    });

    // create the controller and inject Angular's $scope
    brewApp.controller('homeController', function($scope) {
        // create a message to display in our view
        $scope.message = 'awesome home...someday';
        $scope.isActive = function (viewLocation) {
             var active = (viewLocation === $location.path());
             return active;
        };
    });

    brewApp.controller('recipesController', function($scope) {
        $scope.message = 'this will be the recipes view';
        $scope.isActive = function (viewLocation) {
             var active = (viewLocation === $location.path());
             return active;
        };
    });

    brewApp.controller('newRecipeController', function($scope,$http) {
        
        $scope.isActive = function (viewLocation) {
             var active = (viewLocation === $location.path());
             return active;
        };

        $scope.formData = {};
        $scope.processForm = function() {
        };
        // process the form
        $scope.processForm = function() {
          $http({
          method  : 'POST',
          url     : 'process.php',
          data    : $.param($scope.formData),  // pass in data as strings
          headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
         })
          .success(function(data) {
            console.log(data);

            if (!data.success) {
              // if not successful, bind errors to error variables
              $scope.errorName = data.errors.name;
              $scope.errorStyle = data.errors.style;
              $scope.errorMaltType = data.errors.maltType;
              $scope.errorDescription = data.errors.description;
            } else {
              // if successful, bind success message to message
              $scope.message = data.message;
            }
          });
        };

    });

    //navbar controller function



//End Controllers ----------------------------------------->
