<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Empty</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="/">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js"></script>

</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header ng-include="'templates/nav.html'"></header>
    <div class="container z-depth-3">
        <div ui-view></div>
    </div>

    <script src="/js/controllers/main/mainController.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>