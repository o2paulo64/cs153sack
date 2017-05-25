<?php

	include 'includes/head.php';

?>
	<div class='container-fluid'>
		<div class='well well-sm'>
			<center><h2>Create New User</h2></center>
			
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

		<form action ="<?php echo base_url('index.php/AddUser_controller'); ?>" method='POST'>
			<div class='row'>
			
				<div class='col-sm-4'>
						<div class="form-group-lg">
							<label for="inputdefault">First Name: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="firstname">
							</div>
						</div>

						<div class="form-group-lg">
							<label for="inputdefault">Last Name: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="lastname">
							</div>
						</div>

						<div class="form-group-lg">
							<label for="inputdefault">Address: </label>
							<div class="form-group">
								<textarea type="input" class="form-control" rows='3' style='resize: none;' name="address"></textarea>
							</div>
						</div>

							<label for="inputdefault">Birthday: </label>
						<div class="form-group-lg">
							<div class='col-md-4'>
							<label for="inputdefault">Month: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="birthMonth">
							</div>
							</div>
							<div class='col-md-4'>
							<label for="inputdefault">Day: </label>
							<div class="form-group">
								<input type="text" class="form-control"  name="birthDay">
							</div>
							</div>
							<div class='col-md-4'>
							<label for="inputdefault">Year: </label>
							<div class="form-group">
								<input type="text" class="form-control"  name="birthYear">
							</div>
							</div>
						</div>


				</div>
				
				<div class='col-sm-3'></div>
				<div class='col-sm-3'>

						<div class="form-group-lg">
							<label for="inputdefault">Username: </label>
							<div class="form-group">
								<input type="text" class="form-control" name="username">
							</div>
						</div>

						<div class="form-group-lg">
							<label for="inputdefault">Password: </label>
							<div class="form-group">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group-lg">
							<label for="inputdefault">Retype Password: </label>
							<div class="form-group">
								<input type="password" class="form-control" name="repassword">
							</div>
						</div>
				</div>
				
					<!--First name:<br>
					<input type="text" name="firstname"><br>
					Last name:<br>
					<input type="text" name="lastname"><br>
					BirthMonth:<br>
					<input type="text" name="birthMonth"><br>
					BirthDay:<br>
					<input type="text" name="birthDay"><br>
					BirthYear:<br>
					<input type="text" name="birthYear"><br>
					Address:<br>
					<input type="text" name="address"><br>
					username:<br>
					<input type="text" name="username"><br>
					Password:<br>
					<input type="password" name="password"><br>
					Retype Password:<br>
					<input type="password" name="repassword"><br>-->
									
			</div>

			<div class='row' style='margin-top: 50px;'>
				
				<div class='col-md-2'>
					<input type="submit" style="background-color: black; color: white;"class="btn btn-default btn-sm" value="Submit" />
				</div>
			</div>
		</form>
	</div>
</body>