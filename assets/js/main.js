//Controllers ---------------------------------------------->

    // create the module and named it kodeKiwiApp
    // also include ngRoute for all our routing needs
var kodeKiwiApp = angular.module('kodeKiwiApp', ['ngRoute']);
    // create the module and name it scotchApp
    // configure our routes
    kodeKiwiApp.config(function($routeProvider) {
        $routeProvider
              // route for the home page
            .when('/', {
                templateUrl : 'pages/login.html',
                controller  : 'mainController'
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
    kodeKiwiApp.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message = 'awesome login page...someday';
    });

    kodeKiwiApp.controller('pagesController', function($scope, $route, $routeParams) {
        $scope.message = 'chat/code editor page.';
        $scope.file = $route.current.params.file;
        $scope.userRepo = $route.current.params.repo;
        $scope.gitUsername = $route.current.params.username;
        console.log("in controller " + file);
    });

    kodeKiwiApp.controller('statController', function($scope) {
        $scope.message = 'mint statistics page.';
    });



//End Controllers ----------------------------------------->
