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
          url     : '/homebrew_notebook/process.php',
          data    : $.param($scope.formData),  // pass in data as strings
          headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
         })
          .success(function(data) {
            // console.log(data);

            if (!data.success) {

              $scope.errorName = data.feedback.name;
              $scope.errorStyle = data.feedback.style;
              $scope.errorMaltType = data.feedback.maltType;
              $scope.errorDescription = data.feedback.description;
          
            } else {
              // if successful, bind success message to message
              $scope.feedback = data.feedback;
            }
          });
        };

    });

    //navbar controller function



//End Controllers ----------------------------------------->
