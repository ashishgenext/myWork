<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
	</head>
	<body>
		<br><br>
		<div class="container">
		    <div class="row">
		    	<div class="span3"></div>
				<div class="span6 well ">
				    <form class="form-horizontal" method="post" action="scripts/admin_login_check.php">
						<fieldset>
						    <legend>Please sign in</legend>
						    <div class="control-group">
								<label class="control-label" for="id_username">Username</label>
								<div class="controls">
								    <input name="user_name" onclick="removeWarning()" maxlength="100" placeholder="Enter your username..." type="text" class="input-large" id="id_username" />
								</div>
						    </div>
						    <div class="control-group">
								<label class="control-label" for="id_password">Password</label>
								<div class="controls">
								    <input name="password" onclick="removeWarning()" maxlength="100" placeholder="Enter your password..." type="password" class="input-large" id="id_password" />
								</div>
						    </div>
						</fieldset>
						<?php
							if($_GET['remarks'] == 'error')
							{
								echo "<div id='warning' class='alert alert-error'><span class='danger'>wrong username/password</span></div>";
							}	
						?>
						<div class="form-actions">
							<div class="control-group">
								<div class="controls pull-left">
									<input name="submit" type="submit" class="btn btn-primary" id="submit" value="Login" />
								</div>
						    </div>
							
						</div>
				    </form>
				</div>
		    </div>
		</div>
		<script>
			var removeWarning = function () {
				var element = document.getElementById("warning");
				if(element)
					element.parentNode.removeChild(element);
			}
		</script>
	</body>
</html>
