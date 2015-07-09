<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <title>Card</title>
    <base href="/">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js"></script>

</head>
<body>

    <header ng-include="'templates/nav.html'"></header>
    <div class="container z-depth-3">
        <div ui-view></div>
    </div>

    <script src="/js/controllers/main/mainController.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>