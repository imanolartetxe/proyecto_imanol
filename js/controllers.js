app.controller('CocheList', ['$scope', '$http', 'CocheService', '$location', '$timeout',
    function($scope, $http, CocheService, $location, $timeout){
    var poller = function() {
        $timeout(poller, 5000);
        CocheService.getCoches(function(data){
            $scope.coches = data;
        });
    }
    poller();

}]);
app.controller('SingleCoche', ['$scope', '$http', '$routeParams', 
    function($scope, $http, $routeParams){
    $http.get('./drupal/web/api/coches/' + $routeParams.id)
    .success(function(data){
        $scope.coche = data[0];
    });
}]);
