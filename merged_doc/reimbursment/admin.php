<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
		<link rel="stylesheet" href="css/manual.css" media="all">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="span8">
					<h3 class>Administrator Portal</h3>
				</div>
				<div class="span4">
					<form action="scripts/logout.php">
						<input name="submit" type="submit" class="btn btn-primary" id="submit" value="Logout" />
					</form>
				</div>
			</div>
			
		</div>
		<div class="well">
			<h5>Employee/Student IDs of those who requested for reimbursment.</h5>
			<div class="container">
				<div class="row">
					<?php
						session_start();
						if(!$_SESSION['user']){
							header("location:admin_login.php");
						}
						include 'scripts/phpConnect.php';
						$query = "SELECT DISTINCT employee_id, name FROM reimbursment where status=false and designation='faculty'";
						$records = mysql_query($query) or die(mysql_error());
						echo '<div class="span4"><h5 class="span4">Faculty</h5>';
						echo '<div class="requests">';
						echo '<ul>';
						while ( $info = mysql_fetch_array( $records ) ) {
							echo '<li><a href="admin.php?id='.$info['employee_id'].'">'.$info['employee_id'];
							echo '</a></li>';
						}
						echo '</ul></div></div>';

						$query = "SELECT DISTINCT employee_id, name FROM reimbursment where status=false and designation='student'";
						$records = mysql_query($query) or die(mysql_error());
						echo '<div class="span4"><h5 class="span4">Students</h5>';
						echo '<div class="requests">';
						echo '<ul>';
						while ( $info = mysql_fetch_array( $records ) ) {
							echo '<li><a href="admin.php?id='.$info['employee_id'].'">'.$info['employee_id'];
						//	echo $info['name'];
							echo '</a></li>';
						}
						echo '</ul></div></div>';

						$query = "SELECT DISTINCT employee_id, name FROM reimbursment where status=false and designation='employee'";
						$records = mysql_query($query) or die(mysql_error());
						echo '<div class="span4"><h5 class="span4">Employee</h5>';
						echo '<div class="requests">';
						echo '<ul>';
						while ( $info = mysql_fetch_array( $records ) ) {
							echo '<li><a href="admin.php?id='.$info['employee_id'].'">'.$info['employee_id'];
						//	echo $info['name'];
							echo '</a></li>';
						}
						echo '</ul></div></div>';
					?>
				</div>
			</div>
			<hr>

			<div>
				<?php
					
					$id = $_GET['id'];
					if(!$id)
					{
						//echo "no id have been inserted";
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
							echo '<td>'.$info['status'].'</td>';
							echo '<td><a href="admin/details.php?id='. $info['request_id'] .'">details</a></td>';
							echo '</tr>';
						}
						echo '</tbody></table>';
						mysql_close();
					}
					
				?>
			</div>
		</div>
	</body>
</html>
