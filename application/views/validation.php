<?php
	if($auth==1)
		include 'includes/head.php';
	else
		include 'includes/head_user.php';

?>

<div class='container'>
	<div class='col-md-4'></div>
	<div class='col-md-4'>
		<div class="loginmodal-container" style="margin-top: 20px;">

			<h1>User Confirmation</h1><br>
			<!-- Wrong Username or Password Warning Section -->
			<?php
			if(validation_errors() != "")
			{
				echo('<div class="alert alert-danger"><strong>'.validation_errors().'</strong></div>');
			}
			?>
			<form action ="<?php echo base_url('index.php/Myaccount_validation'); ?>" method='POST'>
				<input type='password' name='password' placeholder='Password'>
				<input type='submit' name='login' class='login loginmodal-submit' value='Submit'>
			</form>
			<!--<div class='login-help'>
				<a href='about.php' id='linkss'>If you can't log in, too bad.</a>
			</div>-->
		</div>
	</div>
</div>

</body>
</html>