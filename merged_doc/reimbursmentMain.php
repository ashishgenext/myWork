<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
	</head>

	<body>
		<br><br>
		<div class="form-horizontal">
			<div class="well" style="text-align: center;">
				<h4>APPLICATION FOR REIMBURSEMENT OF MEDICAL EXPENSES</h3>
				<h4>(FOR OUTDOOR PATIENT ONLY)</h3>
			</div>
			<div class="row container">
				<div class="well" >
					<h5>Please fill all the details : </h5>
					<form method="post" action="scripts/reimbursment.php" id="employee" enctype="multipart/form-data">
						<div class="control-group">
							<label class="control-label">Name : </label>
							<div class="controls">
								<input class="input-medium" pattern="[A-Z a-z]*" name="name" value="" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Designation : </label>
							<div class="controls">
								<!-- <input class="input-medium" name="designation" value="" required> -->
								<select class="input-medium" name="designation">
									<option value="student">Student</option>
									<option value="faculty">Faculty</option>
									<option value="employee">Employee</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Employee No. : </label>
							<div class="controls">
								<input class="input-medium" name="employee_no" value="" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Email Id. : </label>
							<div class="controls">
								<input class="input-medium"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email_id" value="" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">School/Office : </label>
							<div class="controls">
								<input class="input-medium" name="school_office" value="" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Name of patient : </label>
							<div class="controls">
								<input class="input-medium" pattern="[A-Z a-z]*" name="name_patient" value="" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Relation : </label>
							<div class="controls">
								<!-- <input class="input-medium" pattern="[A-Z a-z]*" name="relation" value="" required> -->
								<select class="input-medium" name="relation">
									<option value="Self">Self</option>
									<option value="Father">Father</option>
									<option value="Mother">Mother</option>
									<option value="Wife">Wife</option>
									<option value="Son">Son</option>
									<option value="Daughter">Daughter</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Age : </label>
							<div class="controls">
								<input class="input-medium" type="" pattern="[0-9]{2}" name="age" value="" required>
							</div>
						</div>
						
						<div id="file">
							<label for="file">Filename:</label>
							<input type="file" name="file[]" multiple>
						</div>
						<div>
							<input name="submit" type="submit" class="btn btn-success" id="submit" value="Apply" />
						</div>
					</form>
				</div>
			</div>
		</div>
		<script >
			var createFileUploads = function()
			{
				var form = document.getElementById('employee');
				var fileDiv = document.getElementById('file');
				while (fileDiv.firstChild) fileDiv.removeChild(fileDiv.firstChild);
				for (var i=0; i< form.elements.number_of_vouchers.value; i++){
					var element=document.createElement("input");
					element.setAttribute("type", "file");
					element.setAttribute("name", "file[]");
					fileDiv.appendChild(element);
				}
			}
			
		</script>
	</body>
</html>
