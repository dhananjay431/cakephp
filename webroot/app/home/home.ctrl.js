(function (){
	angular.module('cakedemo')
	.controller('homeCtrl',function($scope, $http){
		console.log('home');
			$scope.data={};
	   $http.get("/api/v1/user")
    .then(function(response) {

        $scope.data=response.data.data;

   
    }, function(response) {
    

    });
	});
})();