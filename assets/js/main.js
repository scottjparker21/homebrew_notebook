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

            .when('/editor/:username/:repo/:file', {
                templateUrl : 'pages/editor.html',
                controller  : 'pagesController'
            })
            // route for the stats page
            .when('/stats', {
                templateUrl : 'pages/stats.html',
                controller  : 'statController'
            });
    });


    // Using these controllers for testing purposed atm.
    // create the controller and inject Angular's $scope
    brewApp.controller('homeController', function($scope) {
        // create a message to display in our view
        $scope.message = 'awesome home...someday';
    });

    brewApp.controller('pagesController', function($scope) {
      
    });

    brewApp.controller('statController', function($scope) {
        $scope.message = 'mint statistics page.';
    });



//End Controllers ----------------------------------------->
