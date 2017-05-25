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

<div class='container'>
	<div class='col-md-4'></div>
	<div class='col-md-4'>
		<div class="loginmodal-container" style="margin-top: 20px;">

			<h1>Authorized Login</h1><br>
			<!-- Wrong Username or Password Warning Section -->
			<?php
			if(validation_errors() != "")
			{
				echo('<div class="alert alert-danger"><strong>'.validation_errors().'</strong></div>');
			}
			?>
			<form action ="<?php echo base_url('index.php/Checklogin_controller'); ?>" method='POST'>
				<input type='text' name='username' placeholder='Username'>
				<input type='password' name='password' placeholder='Password'>
				<input type='submit' name='login' class='login loginmodal-submit' value='Login'>
			</form>
			<!--<div class='login-help'>
				<a href='about.php' id='linkss'>If you can't log in, too bad.</a>
			</div>-->
		</div>
	</div>
</div>

</body>
</html>