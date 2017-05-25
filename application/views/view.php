<?php 
	if($auth==1)
		include 'includes/head.php';
	else
		include 'includes/head_user.php';
?>

	<div class='container-fluid'>
		<div class='well well-sm'>
			<center><h2>Online Users</h2></center>
			
		</div>
	</div>
	<div class='container'>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>Username</th>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($results->result_array() as $row)
				{
					echo("<tr>");
					echo("<td>".$row['username']."</td>");
					echo("<td>".$row['firstname']."</td>");
					echo("<td>".$row['lastname']."</td>");
					echo("</tr>");
				}
				?>
			</tbody>
		</table>	
	</div>
</body>