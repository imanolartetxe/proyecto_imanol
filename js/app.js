var app = angular.module('cocheApp', ['ngRoute', 'ngSanitize']);
app.config(
	['$routeProvider', '$locationProvider',
	    function($routeProvider, $locationProvider){
	        $routeProvider
	        .when('/coches/:id', {
	            templateUrl: './single_coche.php',
	            controller: 'SingleCoche'
	        })
	        $locationProvider.html5Mode(true);
	    }
	]
);