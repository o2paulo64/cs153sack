<?php 
	include 'includes/head.php';

?>
	<div class='container-fluid'>
		<div class='well well-sm'>
			<center><h2>Upgrade Entries</h2></center>
			
		</div>
	</div>
	<div class='container'>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Birthday</th>
					<th>Action </th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($results->result_array() as $row)
				{
					echo("<tr>");
					echo("<td>".$row['firstname']."</td>");
					echo("<td>".$row['lastname']."</td>");
					echo("<td>".$row['birthMonth']." ".$row['birthDay'].",".$row['birthYear']."</td>");
						echo("<td>");
						echo('<form accept-charset="UTF-8" role="form" action ="');
						echo base_url('index.php/Upgrade_controller/index');
						echo ('" method="POST">');
						echo ('<input type="hidden" name="firstname" value="'.$row['firstname'].'">');
						echo ('<input type="hidden" name="lastname" value="'.$row['lastname'].'">');
						echo ('<input type="hidden" name="birthMonth" value="'.$row['birthMonth'].'">');
						echo ('<input type="hidden" name="birthDay" value="'.$row['birthDay'].'">');
						echo ('<input type="hidden" name="birthYear" value="'.$row['birthYear'].'">');
						echo ('<input type="hidden" name="address" value="'.$row['address'].'">');
						echo ('<input type="hidden" name="username" value="'.$row['username'].'">');
						echo ('<input type="hidden" name="password" value="'.$row['password'].'">');
						echo ('<input type="hidden" name="userId" value="'.$row['userId'].'">');
						echo('<button type="submit" >Upgrade Entry</a>');
						echo("</form>");
						echo("</td>");
						echo("</tr>");
				}
				?>
			</tbody>
		</table>	
	</div>
</body>