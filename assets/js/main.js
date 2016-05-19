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

    brewApp.controller('newRecipeController', function($scope) {
        $scope.message = 'new recipes go here';
        $scope.isActive = function (viewLocation) {
             var active = (viewLocation === $location.path());
             return active;
        };
        $scope.newRecipe = {};
    });

    //navbar controller function



//End Controllers ----------------------------------------->
