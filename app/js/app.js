'use strict';

// Declare app level module which depends on filters, and services
angular.module('injusticeApp', ['injusticeApp.filters', 'injusticeApp.services', 'injusticeApp.directives']).
  config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider.when('/home', {templateUrl: 'partials/home.html', controller: 'HomeCtrl'});
    $routeProvider.when('/bios/:characterName', {templateUrl: 'partials/partialbios.html', controller: 'BioCtrl'});

    // legacy deep links
	$routeProvider.when('/modal/bio/:characterName', {templateUrl: 'partials/none.html', controller: 'RedirectCtrl'});
    $routeProvider.when('/tournaments/', {templateUrl: 'partials/none.html', controller: 'RedirectCtrl'});

    $routeProvider.otherwise({templateUrl: 'partials/none.html', controller: 'RedirectCtrl'});

    //$locationProvider.html5Mode(true);
  }]);



/*-----------------------------------------------------------------------
 Injustice Battle Arena
                    .                    .         .      .  
,-. . . ,_, ,-. ,-. |-. ,-. ,-. ,-.    ,-| . ,-. . |- ,-. |   	Los Angeles
,-| | |  /  |-' | | | | |-' |   | |    | | | | | | |  ,-| |  	2013
`-^ `-| '"' `-' ' ' ^-' `-' '   `-|    `-^ ' `-| ' `' `-^ `' 
     /|                          ,|           ,|             
    `-'                          `'           `'             

 Exec Prod	    : Steve Bastien
 PMO		    : Jeff Wong
 AE				: James Kim
 Dev/Arch      : Marten Compoc, Erick Soto, Tomer Almog
 Creative		: Ricardo Mireles
 PM				: Richard Salinas

 Special thanks to WBI, DC Comics, GameStop, LA Promo
 -----------------------------------------------------------------------*/