<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Using CI</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
	<div class="containter">
		<br /><br /><br />
			<h3 align="center">Insert Data using CI</h3>
			<br />
			<form method="post" action="<?php echo base_url()?>main/form_validation">
				<?php
				if($this->uri->segment(2) == "inserted")
				{
					//main - segment(1)
					//inserted - segment(2)
					echo '<p class="text-success">Data Inserted</p>';
				}
				?>
				<div class="form-group">
					<label>Enter First Name</label>
					<input type="text" name="first_name" class="form-control">
					<span class="text-danger"><?php echo form_error("first_name"); ?>
					</span>
				</div>
				<div class="form-group">
					<label>Enter Last Name</label>
					<input type="text" name="last_name" class="form-control">
					<span class="text-danger"><?php echo form_error("last_name"); ?>
					</span>					
				</div>				
				<div class="form-group">
					<input type="submit" name="insert" value="Insert" class="btn btn-info">
				</div>
			</form>
	</div>
</body>
</html>