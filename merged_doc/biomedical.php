<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
		<link rel="stylesheet" type="text/css" media="all" href="css/calandar/jsDatePick_ltr.css" />
        <script type="text/javascript" src="js/calandar/jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%M-%d"
		});
	};
</script>

	</head>

	<body>
		<br><br>
		<div class="form-horizontal">
			<div class="well" style="text-align: center;">
				<h4>BIOMEDICAL WASTAGE RECORD</h3>
				<h4>[SUBMISSION FORM]</h3>
			</div>
			<div class="row container">
				<div class="well" >
					<?php
					 //ini_set();
					error_reporting(E_ERROR);
					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/plain; charset=iso-8859-2\nContent-Transfer-Encoding: 8bit\nX-Priority: 1\nX-MSMail-Priority: High\n";
					$headers .= "From: <shekhar@entronic.com>\n" . "Reply-To: <shekhar@entronic.com>\n";
					$success = mail("saveena_rajput@students.iitmandi.ac.in", "text", "test");
					//ini_set();
					echo $success;
					?>
					<h5>Please fill all the details : </h5>
					<form method="post" action="biomedical_backend.php" id="backend1" enctype="multipart/form-data">
						<div class="control-group">
							<label class="control-label">Select Date : </label>
							<div class="controls">
								<input class="input-medium" pattern="[A-Z a-z 0-9 -]*" name="waste_date" id="inputField" value="" required>
							</div>
						</div>
					    <h5>YELLOW Category:</h5>
						<div class="control-group">
							<label class="control-label">Category 1:</label>
							<div class="controls">
								<input class="input-medium" name="cat1" value="">
								&nbsp gm
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Category 6:</label>
							<div class="controls">
								<input class="input-medium" name="cat6" value="" required>
								&nbsp gm
							</div>
						</div>
						
						<h5>BLUE Category</h5>
						<div class="control-group">
							<label class="control-label">Category 4:</label>
							<div class="controls">
								<input class="input-medium" name="cat4" value="" required>
								&nbsp gm
							</div>
						</div>
						
						<h5>RED Category</h5>
						<div class="control-group">
							<label class="control-label">Category 7:</label>
							<div class="controls">
								<input class="input-medium" name="cat7" value="" required>
								&nbsp gm
							</div>
						</div>
						
						<h5>LIQUID WASTE Category</h5>
						<div class="control-group">
							<label class="control-label">Category 8:</label>
							<div class="controls">
								<input class="input-medium" name="cat8" value="" required>
								&nbsp gm
							</div>
						</div>
						
						<h5>CHEMICAL WASTE Category</h5>
						<div class="control-group">
							<label class="control-label">Category 10:</label>
							<div class="controls">
								<input class="input-medium" name="cat10" value="" required>
								&nbsp gm
							</div>
						</div>
						<div>
							<input name="submit" type="submit" class="btn btn-success" id="submit" value="Save" />
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>
