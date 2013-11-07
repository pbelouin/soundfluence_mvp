<!DOCTYPE html>
<html ng-app="module">
  <head>
    <title>Soundfluence</title>
    <meta name="viewport" content="width=device-width, height=device-height">
    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="style/main.css" rel="stylesheet" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//use.typekit.net/yve8xtw.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
    <script type="text/javascript" src="bower_components/angular/main.js"></script>
    <script type="text/javascript" src="bower_components/angularui/ui-bootstrap.min.js"</script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-45361594-1', 'soundfluence.com');
    ga('send', 'pageview');
  </script>
  </head>
  <body>
    <div class="container" ng-view ng-animate="{enter: 'enter-animation', leave: 'leave-animation'}">
      
    </div> <!-- /container -->
    <!-- Site footer -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
</html>