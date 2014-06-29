<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
	</head>
	<body>
		<div class="hero-unit">
			<p>Your reimbursment requests</p>
		</div>
		<div>
			<?php
				include 'scripts/phpConnect.php';
				$id = $_GET['id'];
				if(!$id)
				{
				}
				else
				{
					$query = "SELECT * FROM reimbursment where employee_id='$id'";
					$dataEmployee = mysql_query($query) or die(mysql_error());
					
					
					$i = 0;
					while($info = mysql_fetch_array( $dataEmployee )) 
					{
						$i = $i + 1;
						if($i == 1)
						{
							echo '<table class="table"><thead>';
							echo '<th>S. No</th>';
							echo '<th>Name</th>';
							echo '<th>designation</th>';
							echo '<th>School/Office</th>';
							echo '<th>Patient Name </th>';
							echo '<th>Patient Age</th>';
							echo '<th>Relation</th>';
							echo '<th>Status</th>';
							echo '<th>Remarks</th>';
							echo '<th></th>';
							echo '</thead><tbody>';
						}
						echo '<tr>';
						echo '<td>'.$i.'</td>';
						echo '<td>'.$info['name'].'</td>';
						echo '<td>'.$info['designation'].'</td>';
						echo '<td>'.$info['school_or_office'].'</td>';
						echo '<td>'.$info['patient_name'].'</td>';
						echo '<td>'.$info['patient_age'].'</td>';
						echo '<td>'.$info['relation'].'</td>';
						echo '<td>'.$info['comment'].'</td>';
						echo '<td>'.$info['status'].'</td>';
						echo '<td><a href="admin/details.php?id='. $info['request_id'] .'">details</a></td>';
						echo '</tr>';
					}
					echo '</tbody></table>';
				}
				mysql_close();
			?>
			
		</div>
	</body>
</html>
