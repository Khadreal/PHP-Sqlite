<!DOCTYPE html>
<html>
<head>
	<title><?php echo $GLOBALS['pagetitle']; ?> | Contact App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8" content="Opeyemi Ibrahim" name="author">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
	    <div class="container">
	        <div class="navbar-header">

	            <!-- Collapsed Hamburger -->
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                <span class="sr-only">Toggle Navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>

	            <!-- Branding Image -->
	            <a class="navbar-brand logo"  href="index.php" title="Homepage" rel="home">Contact Info</a>
	        </div>

	        <div class="collapse navbar-collapse" id="app-navbar-collapse">

	            <!-- Right Side Of Navbar -->
	            <ul class="nav navbar-nav navbar-right">
	                <li><a href="list.php">View Contacts</a></li>
	                <li><a href="add.php">Add New</a></li>
	            </ul>

	            <div class="col-sm-3 col-md-3 pull-right">
			        <form method="post" class="navbar-form" action="search.php" role="search">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Enter a Name" name="term" id="srch-term">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				            </div>
				        </div>
			        </form>
		        </div>

	        </div>
	    </div>
	</nav>
	<div class="container col-md-8 col-md-offset-2">
		<?php echo $content;?>
	</div>
</body>
</html>