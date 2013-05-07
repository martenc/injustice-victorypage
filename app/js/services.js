'use strict';

/* Services */

angular.module('injusticeApp.services', ['ngResource']).
    factory('Character', function($resource){
  		return $resource('/app/bios/:characterName.json', {}, {
    query: {method:'GET', params:{characterName:'characters'}, isArray:true}
  });
});
