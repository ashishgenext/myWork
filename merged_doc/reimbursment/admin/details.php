<html>
	<head>
		<link rel="stylesheet" href="../css/bootstrap.css" media="all">
	</head>
	<body>
		<div class="container">
			<h3 class>Administrator Portal</h3>
		</div>
		<div class="container well">
			<div>
				<h5>Reimbursment specific details :</h5>
			</div>
			<hr/>
			<div>
				<?php
						include '../scripts/phpConnect.php';
						$request_id = $_GET['id'];
						$query = "SELECT * FROM medicine_details where request_id='$request_id'";
						
						$data = mysql_query($query) or die(mysql_error()); 
						// $sqlone = "select * from medicine_details";
						$i = 0;
						$sum =0;
						while($info = mysql_fetch_array( $data )) 
						{
							$sum = $sum + $info['medicines_cost'] + $info['tests_cost'];
							$i = $i + 1;
							if($i == 1)
							{
								echo '<table class="table"><thead>';
								echo '<th>S. No</th>';
								echo '<th>Name of supplier</th>';
								echo '<th>medicines</th>';
								echo '<th>Tests</th>';
								echo '<th>Total Cost</th>';
								echo '</thead><tbody>';
							}
							echo '<tr>';
							echo '<td>'.$i.'</td>';
							echo '<td>'.$info['name_of_supplier'].'</td>';
							echo '<td>'.$info['medicines'].'</td>';
							echo '<td>'.$info['tests'].'</td>';
							echo '<td>'.($info['medicines_cost'] + $info['tests_cost']).'</td>';
							echo '</tr>';
						}
						echo '<tr><td colspan="3"></td><td class="success">Total Sum : </td><td > '.$sum.'</td></tr>';
						echo '</tbody></table>';
						
					?>

			</div>
			<div>
				<form action="../scripts/approve.php" method="GET">
					<?php
						$request_id = $_GET['id'];
						$query = "SELECT * FROM reimbursment where request_id='$request_id'";
						
						$data = mysql_query($query) or die(mysql_error());
						$info = mysql_fetch_array( $data );
						echo '<input name="request_id" type="hidden" value="'.$request_id.'""></input>';
						
						if($info['status'] == 'pending')
						{
							echo '<input name="comment" type="area" value="'.$info['comment'].'"></input>';
						}
						else
						{
							echo '<span>'.$info['comment'].'"</span>';
						}
						echo '<br/><br/>';
						echo '<a class="btn btn-primary" href="../admin.php">Back</a>';
						echo '<input class="btn btn-success" name="approve" type="submit" value="Approve"'; 
						
						if($info['status'] !== 'pending')
						{
							echo 'disabled';
						}
						echo '></a>';
						echo '<input class="btn btn-error" name="discard" type="submit" value="Discard"'; 
						if($info['status'] !== 'pending')
						{
							echo 'disabled';
						}
							
						echo '></a>';
						mysql_close();
					?>
				</form>
				
			</div>
		</div>
	</body>
</html>
