'use strict';


// Declare app level module which depends on filters, and services
angular.module('DaskeyboardApp', [
  'DaskeyboardControllers',
  'DaskeyboardDirectives',
  'DaskeyboardServices',
  'DaskeyboardFilters',
  'httpStateInterceptor',
  'ngCookies',
  'ngSanitize',
  'ngResource'
]);

var controllersModule = angular.module('DaskeyboardControllers', []);
