<?php
	include('db/db.php');
    if(isset($_POST['submit']))
    {
        $SQL1 = "INSERT INTO otherinfo (OID, AID, Acc_no, Currency, Bal_acc, Address, Contact, Email, Gender, Pin) VALUES ('', '', '', 'PHP', '', '$_POST[Address]', '$_POST[contact]', '$_POST[emailadd]', '$_POST[Gender]', '$_POST[Pin]' )";
        $SQL2 = "INSERT INTO accounts (AID, LID, Surname, Fname, Mi) VALUES ('','', '$_POST[surname]', '$_POST[firstname]', '$_POST[midname]')";
        $SQL3 = "INSERT INTO Login_tbl (LID, Un, Pw) VALUES ('', $_POST[user]', $_POST[pass])";
    }
    $result = mysqli_query($connect,$SQL);
?>
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
		position: relative;
	}	
	input
	{
		margin-left: 20px;
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		position:asolute;
	}
	select{
		text-align-last:center;
	}

	label:after
	{
     content:"*" ;
     color:red   
    }
	</style>
	<body>

	<input	class ="form-control"
					style ="width:200px;"
					name="surname" 	
					type = "text"
					id = "surname"
					value = "" />
	<center>
		
		<form action = "db/db.php" method = "post">
			<div class = "jumbotron container">
			<h1 style="background-color:#000067; color:white;"><center> Registration Form </center></h1>
			<fieldset>
			
			<h2 style="background-color:#808080;"> Personal Details </h2>
			<h5 style ="color:red;">*Required field</h5>
			<div class="row">
			
			<label> Surname: </label> 
			<input	class ="form-control"
					style ="width:200px;"
					name="surname" 	
					type = "text"
					id = "surname" />

			<label> First Name:  </label>
			
			<input 	class ="form-control"
					style ="width:200px;"
					name="firstname" 
					type = "text"
					id = "firstname"
					value = "" />
                
                		
			<label> Middle Name: </label>
			
			<input 	class ="form-control"
					style ="width:200px;"
					name="midname" 
					type = "text"
					id = "midname"
					value = "" />
				
			<label> Gender: </label>
			<select name= "Gender"
					class ="form-control"
					style ="width:200px;">
				<option value="male" >Male</option>
				<option value="female">Female</option>
			</select>

					
			<label> Address: </label>
			
			<input 	class ="form-control"
					style ="width:200px;"
					name="Address" 
					type = "text"
					id = "Address"
					value = "" />
					</br>
			</center>
			</div>
			<center>
			<div class= "jumbotron container">
			<h2 style="background-color:#000067;color:white;"> Bank Account</h2>
			<h5 style ="color:red">*Required field</h5>
			<label> Bank Account Number: </label>
			
			<input 	class ="form-control"
					style ="width:200px;"
					name="Bank_acc" 
					type = "text"
					id = "Bank_acc"
					value = "" />
					
			<label> Email Address: </label>
			
			<input 	class ="form-control"
					style ="width:200px;"
					name="emailadd" 
					type = "text"
					id = "emailadd"
					value = "" />
			<br/>
			<label> Contact No.: </label>
			
			<input 	class ="form-control"
					style ="width:200px;"
					name="contact" 
					type = "text"
					id = "contact"
					value = "" />
			<label> PIN NUMBER: </label>
			
			<input 	class ="form-control"
					style ="width:200px;"
					maxlength="6"
					name="Pin" 
					type = "password"
					id = "Pin"
					value = "" />
					</div>
					<div class= "jumbotron container">
			<h2 style="background-color:#000067;color:white;"> Login Credentials</h2>
			<h5 style ="color:red">*Required field</h5>
			<center>
			<label> Username: </label>
			<div class= "input-group">
			<input 	class ="form-control"
					style ="width:200px;"
					name="user" 
					type = "text"
					id = "user"
					value = "" />
			<br/>
			</div>
			<label> Password: </label>
			<div class= "input-group">
			<input 	class ="form-control"
					style ="width:200px;"
					name="pass" 
					type = "text"
					id = "pass"
					value = "" />
					
					
			</div>
			</fieldset>	
			</br>
			</br>
			
            <input 	class ="form-control"
					style ="width:200px;"
					name="pass" 
					type = "password"
					id = "pass"/>
			<input name ="submit" type="button" class="btn btn-primary" style = "width:210px;" value = "SUBMIT">
		
		</div>
		</center>
		</fieldset>
		</div>
		</form>
		</center>
	
</body>
</html>

