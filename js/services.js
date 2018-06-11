app.service('CocheService', ['$http', 
    function($http){
    this.getCoches = function(callback){
        $http.get('./drupal/web/api/coches')
        .success(function(data){
            callback(data);
        });
    };
}]);