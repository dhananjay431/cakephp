(function (){
	angular.module('cakedemo')
	.controller('homeCtrl',function($scope, $http){
		console.log('home');
			$scope.data={};
	   $http.get("api/v1/userid/5")
    .then(function(response) {
        //First function handles success
        $scope.data=response;
   
    }, function(response) {
        //Second function handles error

    });
	});
})();