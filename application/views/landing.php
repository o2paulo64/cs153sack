<?php
	if($auth==1)
		include 'includes/head.php';
	else
		include 'includes/head_user.php';

?>
	<div class='container-fluid'>

		<h1>Welcome, <?php echo($username);?></h1>
		<div class='row' style='margin-top: 30px;'>
			<div class='col-md-12'>
			<div class='col-md-4'>
				<?php
				foreach ($info->result_array() as $row)
				{
					echo('<p><b>Username:</b> '.$row['username'].'</p>');
					echo('<p><b>Name:</b> '.$row['firstname'].' '.$row['lastname'].'</p>');
					echo('<p><b>Address:</b> '.$row['address'].'</p>');
					echo('<p><b>Birthday:</b> '.$row['birthMonth'].' '.$row['birthDay'].','.$row['birthYear'].'</p>');
					
				}
				?>
			</div>
			</div>
		</div>
	</div>
</body>