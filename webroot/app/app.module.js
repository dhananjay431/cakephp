(function (){

	 angular.module('cakedemo', ['ui.router'])
	 
.config(function($stateProvider, $urlRouterProvider) {

  $urlRouterProvider.otherwise('/state1');

  $stateProvider
    .state('state1', {
      url: '/state1',
      templateUrl: 'webroot/app/home/home.html',
      controller:'homeCtrl'
    });
});
})();