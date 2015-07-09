var myApp = angular.module('myApp', [
                                'ui.router',
                                'myApp.main' // <= controller
                                ]);

myApp.config(['$stateProvider', '$urlRouterProvider', '$locationProvider',
    function($stateProvider, $urlRouterProvider, $locationProvider) {
    //
    // For any unmatched url, redirect to /home
    $urlRouterProvider.otherwise("/");

    //
    $locationProvider.html5Mode({
        enabled: true,
        requireBase: false
    });

    // Now set up the states
    $stateProvider
        .state('home', {
            url: "/",
            template: "Home template"
        })
        // .state('state2.list', {
        //     url: "/list",
        //     templateUrl: "partials/state2.list.html",
        //     controller: function($scope) {
        //         $scope.things = ["A", "Set", "Of", "Things"];
        //     }
        // })
        ;
}]);