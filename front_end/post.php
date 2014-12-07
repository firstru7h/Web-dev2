<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>OpenLFG - Post</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css\starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">OpenLFG</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index.php">Home</a></li>
            <li><a href="/contact.php">Contact</a></li>
            <li><a href="/search.php">Search</a></li>
            <li><a href="/post.php">Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Post Message</h1>
        <p class="lead">
        <form action='submission.php'>
        Post Title:  <input type="text" name="ptitle" /><br /><br />
          Username:  <input type="text" name="username" /><br /><br />
        Game Title: <input type="text" name="gtitle" /><br /><br />
        Console: <select name='consoles' id='consoles'>
			    				<option value='XB1'>Xbox One</option>
			    				<option value='PS4'>Playstation 4</option>
			    				<option value='XB360'>Xbox 360</option>
			    				<option value='PS3'>Playstation 3</option>
			    				<option value='PC'>PC</option>
			    				<option value='WiiU'>Wii U</option>
			    				<option value='3DS'>Nintendo 3DS</option>
			     </select>
			     <br /><br />
		Region: <select name='regions' id='regions'>
			    				<option value='North America'>North America</option>
			    				<option value='Europe'>Europe</option>
			    				<option value='South America'>South America</option>
			    				<option value='Other'>Other</option>
			     </select>
			     <br /><br />
		Description:  <input type="text" name="description" /><br /><br />
				<input type="submit" value="post" />
			</form>
        </p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

