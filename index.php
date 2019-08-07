
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<!---	<link rel="icon" href="../../favicon.ico">	-->

    <title>Contact Form in Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sourcecodester</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.sourcecodester.com/">Home</a></li>
            <li><a href="http://www.sourcecodester.com/about-sourcecodester.html">About</a></li>
            <li><a href="http://www.sourcecodester.com/contact">Contact</a></li>
        <!---    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>	-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
	  
<h1>
Contact Us
</h1>

<div style="width:35%;">
<form method="post">
  <div class="form-group">
    <label for="exampleInputPassword1">Name <span style="color:#d0d0d0;">(required)</span></label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name . . . . ." required />
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address <span style="color:#d0d0d0;">(required)</span></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address . . . . ." required />
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Website</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Website . . . . .">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Message <span style="color:#d0d0d0;">(required)</span></label>
    <textarea class="form-control" placeholder="Your Message . . . . ." style="height:200px;" required ></textarea>
  </div>
  <button type="submit" name="send" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Send</button>
</form>
</div>
	  
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; 2016, <a href="http://www.sourcecodester.com/">Free source code, tutorials and articles</a> </p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
