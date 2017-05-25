<?php

	include 'includes/head.php';

?>
	<div class='container-fluid'>
		<div class='well well-sm'>
			<center><h2>Edit User</h2></center>
			
		</div>
	</div>
	
	<div class='container'>
		<div class='row'>
			<div class='col-md-4'></div>
			<div class='col-md-4'>
				<?php
					if(validation_errors() != "")
					{
						echo('<div class="alert alert-danger"><center><strong>'.validation_errors().'</strong></center></div>');
					}
				?>
			</div>
		</div>

		<form action ="<?php echo base_url('index.php/edit_user'); ?>" method='POST'>
			<div class='row'>
			
				<div class='col-sm-4'>
						<div class="form-group-lg">
							<label for="inputdefault">First Name: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="firstname" value=<?php echo $firstname; ?>>
							</div>
						</div>

						<div class="form-group-lg">
							<label for="inputdefault">Last Name: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="lastname" value=<?php echo $lastname; ?>>
							</div>
						</div>

						<div class="form-group-lg">
							<label for="inputdefault">Address: </label>
							<div class="form-group">
								<textarea type="input" class="form-control" rows='3' style='resize: none;' name="address" ><?php echo $address; ?></textarea>
							</div>
						</div>

							<label for="inputdefault">Birthday: </label>
						<div class="form-group-lg">
							<div class='col-md-4'>
							<label for="inputdefault">Month: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="birthMonth" value=<?php echo $birthmonth; ?>>
							</div>
							</div>
							<div class='col-md-4'>
							<label for="inputdefault">Day: </label>
							<div class="form-group">
								<input type="text" class="form-control"  name="birthDay" value=<?php echo $birthday; ?>>
							</div>
							</div>
							<div class='col-md-4'>
							<label for="inputdefault">Year: </label>
							<div class="form-group">
								<input type="text" class="form-control"  name="birthYear" value=<?php echo $birthyear; ?>>
							</div>
							</div>
							<input type="hidden" name="password" value=<?php echo $password; ?>>
							<input type="hidden" name="authority" value=<?php echo $authority; ?>>
							<input type="hidden" name="userId" value=<?php echo $userId; ?>>
						</div>


				</div>
				
				<div class='col-sm-3'></div>
				<div class='col-sm-3'>

						<div class="form-group-lg">
							<label for="inputdefault">Username: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="username" value=<?php echo $username; ?> readonly>
							</div>
						</div>

			
				</div>
				
									
			</div>

			<div class='row' style='margin-top: 50px;'>
				
				<div class='col-md-2'>
					<input type="submit" style="background-color: black; color: white;"class="btn btn-default btn-sm" value="Submit" />
				</div>
			</div>
		</form>
	</div>
</body>