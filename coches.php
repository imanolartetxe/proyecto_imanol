<!DOCTYPE html>
<html lang="en" ng-app="cocheApp">
    <head>
        <base href="/proyecto_imanol/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Concesionario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.4.3/angular-route.min.js"></script>
        <script src="https://code.angularjs.org/1.4.3/angular-sanitize.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.angularjs.org/1.4.3/angular-animate.min.js"></script>
        <script src="./js/app.js"></script>
        <script src="./js/services.js"></script>
        <script src="./js/controllers.js"></script>
        <style>
            .sidebar{
                float:left;
                padding:30px;
                width:30%;
                background-color:#f4f4f4;
                position:fixed;
                height:100%;
            }
            .content{
                float:left;
                padding:30px;
                width:70%;
                margin-left:30%;
            }
            hr{
                border-top:1px solid #ddd;
            }
            input,textarea{
                margin-bottom:8px;
            }
        </style>
    </head>
    <body>
        <div data-ng-controller="CocheList" class="sidebar">
            <h1>Concesionario</h1>
            <h5>Coches de ocasi&oacute;n</h5>
            <hr />
            <form>
                <div class="form-group">
                    <label>Buscar coches</label>
                    <input data-ng-model="cocheFilter" class="form-control" placeholder="Search" />
                </div>
            </form>
            <ul class="coches">
                <li data-ng-repeat="coche in coches | filter:cocheFilter | orderBy:'-nid' | limitTo:5">
                    <a href="coches/{{ coche.nid }}" data-ng-bind-html="coche.title"></a>
                </li>
            </ul>
            <hr />
        </div>
        <div data-ng-view class="content"></div>
    </body>
</html>