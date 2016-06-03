<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Go Fish - Idle items online renting app</title>
    <meta name="description" content="Go Fish, a online idle items renting app."/>
    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="/Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="/Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="/Flat-UI-master/img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row demo-row">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Go Fish</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#feature">Feature</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="#footer">About Us</a></li>
                <li><a href="mailto:yaowang95@pku.edu.cn">Contact Us</a></li>
               </ul>
               <!--<form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>-->
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div> <!-- /row -->
    </div>

    <div class="container">
      <div class="demo-headline">
        <h1 class="demo-logo">
          <div class="logo"></div>
          Go Fish
          <small>Make your idle items useful</small>
        </h1>
        <div class="text-center">
          <a href="#fakelink" class="btn btn-md btn-primary">Click to download</a>
        </div>
      </div> <!-- /demo-headline -->

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <video id="feature" class="video-js" preload="auto" poster="/Flat-UI-master/docs/assets/img/video/poster.jpg" data-setup="{}">
            <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4" type="video/mp4">
            <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm" type="video/webm">
          </video>
        </div> <!-- /video -->
      </div>
    </div>

    </div>

    <footer id = "footer">
       <div class="row">
         <div class="col-lg-12 palette palette-wet-asphalt">
            <h3>go fish</h3>
            <hr>
            <a href="gofish.hackpku.com:8003">gofish.hackpku.com</a>
            <p><br>Peking University
            <br>TEL:86-13401076331
            <br>&copy;SE2016 group 3<br>By Xupu Wang, Yajie Xing, Manchen Wang,<br>Chengsi Wu, Hao Ding and Yao Wang
            <br>guided by Professor Yanchun Sun
            <br>v1.0</p>
          </div> <!-- /col-xs-12 -->
        </div>
    </footer>


    <script src="/Flat-UI-master/dist/js/vendor/jquery.min.js"></script>` 
    <script src="/Flat-UI-master/dist/js/vendor/video.js"></script>
    <script src="/Flat-UI-master/dist/js/flat-ui.min.js"></script>
    <script src="/Flat-UI-master/docs/assets/js/application.js"></script>
    <script type="text/javascript">
      $(window).on("resize", redirect);
      function redirect(e) {
        var width = $(window).width();
        if (width > 768px) {
          window.location.href = "index_pc.html"
        }
      }
      $(document).ready(redirect());
    </script>
  </body>
</html>
