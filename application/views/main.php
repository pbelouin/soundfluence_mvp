<!DOCTYPE html>
<html ng-app="module">
  <head>
    <title>Soundfluence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-45361594-1', 'soundfluence.com');
    ga('send', 'pageview');
  </script>
  </head>
  <body>
    <div class="container">
      <!-- Jumbotron -->
      <div class="jumbotron masthead" ng-controller="Ctrl">
        <p class="brand">Soundfluence</p>
        <h1>Create music together with Soundfluence</h1>
        <p class="lead">Share and discuss your music with a community of talented artists.</p>
        <div class="center" ng-hide="success" ng-animate="'fadeOut'">
          <form role="form" ng-submit="submit()">
            <div class="form-group">
              <p>Apply for our beta now.</p>
              <input type="text" id="inputName" placeholder="Name" ng-model="user.name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="inputEmail" placeholder="Email" ng-model="user.email" required>
            </div>
            <button type="submit" class="btn btn-lg btn-primary" id="submit" value="Submit">SUBMIT</button>
          </form>
        </div>
        <div ng-show="success" ng-animate="'fadeIn'">
          <p>Thanks for your application!<br />
We will keep you updated soon.</p>
        </div>
      </div>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="col-lg-6">
          <h2><span class="glyphicon glyphicon-tasks"></span> Skill Rating</h2>
          <p>We want you to become better. That is why we invented Skill Rating. Skill Rating lets you give and get more detailed feedback on songs and helps you shape great tunes! </p>
        </div>
        <div class="col-lg-6">
          <h2><span class="glyphicon glyphicon-search"></span> Find artists close to you</h2>
          <p>We want you to find great artists to work with.Thats why we created a new way of discovering artists that either live right next door to you or are in your genre.</p>
        </div>
      </div>
      <div class="row-fluid">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6 align-rgt">
           <p><a href="#">Contact</a>&nbsp;<a href="#">Legal</a></p>
        </div>
      </div>
    </div>
    </div> <!-- /container -->
    <!-- Site footer -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
</html>