<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
	</head>
	<body>
		<br><br>
		<div class="form-horizontal">
			<div class="well" style="text-align: center;">
				<h4>APPLICATION FOR REIMBURSEMENT OF MEDICAL EXPENSES</h3>
				<h4>Details</h3>
			</div>
			<div class="row container">
				<div class="well">
					<form id="details" action="scripts/add_details.php" method="post">
						<?php
							echo "<input type='hidden' name='request_id' value='". $_GET['request_id'] . "'>";
						?>
					<div class="control-group">
						<label class="control-label">Name of supplier : </label>
						<div class="controls">
							<input class="input-medium" name="supplier_name" value="" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Tests : </label>
						<div class="controls">
							<input class="input-medium" name="tests" value="" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Tests Cost: </label>
						<div class="controls">
							<input class="input-medium" pattern="[0-9]*" name="testsCost" value="" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Medicines : </label>
						<div id="medicineDiv" class="controls">
							<select onChange="selectMedicine()" class="input-medium" name="medicines" id="medicines" required>
								<option value="">Select Medicine</option>
								<option value="crocin">Crocin</option>
								<option value="DCold">DCold</option>
								<option value="Bruffen">Bruffen</option>
								<option value="other">Other</option>
							</select>
							<br/>
							<!-- <input id="medicineOther" class="input-medium " name="medicinesOther" value="" required> -->
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Medicines Cost : </label>
						<div class="controls">
							<input class="input-medium" type="" pattern="[0-9]*" name="medicinesCost" value="" required>
						</div>
					</div>
					<div>
						<input name="submit" type="submit" class="btn btn-success"id="submit" value="Add" />
						<a class="btn btn-primary" href="recieved.html">Submit</a>
					</div>
					<hr>
					<?php
						include 'scripts/phpConnect.php';
						$request_id = $_GET['request_id'];
						$query = "SELECT * FROM medicine_details where request_id='$request_id'";
						$data = mysql_query($query) or die(mysql_error()); 
						// $sqlone = "select * from medicine_details";
						$i = 0;
					
						while($info = mysql_fetch_array( $data )) 
						{

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
						
						echo '</tbody></table>';
						mysql_close();
					?>
				</div>
			</div>
		</div>
		<script >
			var selectMedicine = function()
			{
				//alert('hello');
				var form = document.getElementById('details');
				var fileDiv = document.getElementById('medicineDiv');
				// while (fileDiv.firstChild) fileDiv.removeChild(fileDiv.firstChild);

				if (form.elements.medicines.value == 'other'){
					var element = document.createElement("input");
					element.setAttribute("type", "area");
					element.setAttribute("name", "medicinesOther");
					element.setAttribute("id", "medicineOther");
					element.setAttribute("class", "input-medium");
					fileDiv.appendChild(element);
					//element.addClass("shekhar");
				}
				else if(document.getElementById("medicineOther"))
				{
					document.getElementById("medicineOther").remove();
				}
					
				//console.log(vouchers);
			}
			
		</script>
	</body>
</html>
