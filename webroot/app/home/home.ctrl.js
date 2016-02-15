(function (){
	angular.module('cakedemo')
	.controller('homeCtrl',function($scope, $http){
		console.log('home');
			$scope.data={};
			$scope.dataFrom={};
	   $http.get("/api/v1/user")
    .then(function(response) {

        $scope.data=response.data.data;

   
    }, function(response) {
    
    		console.log(response);
    });

    $scope.post1=post1;
	function post1(){
		var x={foo:123,bar:456};
		$http.post('/api/v1/userid/2',$scope.dataFrom)
		.then(function(response) 
			{
       		  console.log(response);
    		},function(response) {
        		console.log(response);
    		});
	}
	});



})();