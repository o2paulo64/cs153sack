<?php 
	if($auth==1)
		include 'includes/head.php';
	else
		include 'includes/head_user.php';
?>

	<div class='container-fluid'>
		<div class='well well-sm'>
			<center><h2>User List</h2></center>
			
		</div>
	</div>
	<div class='container'>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Birthday</th>
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
					echo("</tr>");
				}
				?>
			</tbody>
		</table>	
	</div>
</body>