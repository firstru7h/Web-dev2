
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>OpenLFG - Search Results</title>

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
    <style type="text/css">
    	.mytable {
    	width:80%;
    	background-color:#E8E8E8;
    	position:fixed;
    	margin-top:-150px;
    	top:50%;

		}
	</style>
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
        <h1>Search Results</h1>
        <?php
        	require_once('utils.php');
			
			foreach ($_POST AS $key=>$val) 
			{
  				$_POST[$key] = ($val);
 			}
  			$regionName = htmlspecialchars($_GET['regions']);
  			$platformName = htmlspecialchars($_GET['consoles']);
  			$gameName = htmlspecialchars($_GET['gtitle']);
  			$noteName = htmlspecialchars($_GET['note']);
  			$where = " where Platform ='".$platformName."'";
  			if ($regionName == "Search All Regions")
  			{
  				$where .= "";
  			}
  			else $where .= " and Region ='".$regionName."'";
  			$where .= " and Note like '%".$noteName."%' and Game like '%".$gameName."%'";
  			$where .= " order by PostTime desc";
  			
  			//echo $where;
  			//uncomment to check query
  			
        	createTable($where);
        ?>
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

