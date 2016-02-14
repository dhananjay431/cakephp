<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
            cakedemo
    </title>
        <script src="webroot/js/angular.min.js"></script>
        <script src="webroot/js/angular-ui-router.js"></script>
        <script src="webroot/app/app.module.js"></script>
        <script src="webroot/app/home/home.ctrl.js"></script>
        <script src="webroot/js/materialize.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
			    $('.collapsible').collapsible({
			      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			    });
			  });
        </script>

        <link rel="stylesheet" type="text/css" href="webroot/css/materialize.css">
</head>
<body ng-app="cakedemo">
    <ui-view></ui-view>
</body>
</html>