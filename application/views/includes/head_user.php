<!doctype html>
<?php echo link_tag('assets/css/style.css')?>
<?php echo link_tag('assets/css/login.css')?>
<html lang="en">

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project</title>

		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	</head>

<body>
	<nav class='navbar navbar-inverse navbar-static-top'>
		<div class='container-fluid'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle collapsed'  data-toggle='collapse' data-target='#topFixedNavbar1' aria-expanded='false'><span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button>
			
				<a class='navbar-brand' href="<?php echo base_url('index.php/Landing_controller')?>" style="margin-top: -5px;"> <img  src="<?php echo base_url('assets/images/logo.png')?>" width='30' height='30' alt='logo'/></a>
			</div>	

			<div class='collapse navbar-collapse' id='topFixedNavbar1'>	
				<ul class='nav navbar-nav'>
					<li><a href="<?php echo base_url('index.php/Landing_controller')?>">Home</a></li>
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>View<span class='caret'></span></a>
							<ul class='dropdown-menu'>
										<li><a href="<?php echo base_url('index.php/Viewlist_controller')?>">User List</a></li>
										
										<li><a href="<?php echo base_url('index.php/ViewOnline_controller')?>">Online Users</a></li>
								
							</ul>
					</li>
					<li><a href="<?php echo base_url('index.php/View_validation')?>">My Account</a></li>
					<li><a style='color:white;'>Logged in: <i><?php echo($username);?></i></a></li>
					<li><a><form action="<?php echo base_url('index.php/Logout_controller')?>" id='logout'>
							<button type='submit' class='btn btn-default btn-xs' >Log out</button>
						</form></a></li>
				</ul>
		
			
						
				
		</div>
	</nav>