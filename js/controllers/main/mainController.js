(function () {
    'use strict';

    angular
        .module('myApp.main', ['ui.router'])
        .config(['$stateProvider', config])
        .controller('mainController', mainController);

    function config($stateProvider) {
        $stateProvider
            .state('main', {
                url: "/main",
                templateUrl: "/js/controllers/main/main.html",
                controller: 'mainController'
            });
    }

    mainController.$inject = ['$scope', '$stateParams'];

    function mainController($scope, $stateParams) {
        // code
        $scope.title = 'Main controller';
    }
})();