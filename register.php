<?php include ('include/header.php');?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<style>
	label
	{
		margin-left: 20px;
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
	}
	input
	{
		margin-left: 20px;
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
	}
	</style>
	<body>
		<h1><center> Registration Form </center></h1>
		<form>
			<div class = "jumbotron">
			<fieldset>
			<h4 style ="color:red">*Required field</h4>
			<h2> Personal Details </h2>
			
			<p>
			<label> Surname: <h4 style ="color:red">*</h4></label>
			
			<input 	type = "text"
					id = "surname"
					value = "" />
					
			<label> Middle Name: </label>
			
			<input 	type = "text"
					id = "midname"
					value = "" />
					
			<label> First Name: </label>
			
			<input 	type = "text"
					id = "firstname"
					value = "" />
					
			</p>
			</fieldset>		
			</div>
		</form>
			
			

</body>
</html>