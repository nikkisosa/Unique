<?php include('include/header.php');
	  include('db/db.php');

	  if(!$_SESSION['Username'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}

?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

	<div id="page-wrapper">
   <div class="container">
      <!-- Page Heading -->
    <div class="row">
    <div class="col-lg-12">
    <h3 class="page-header">Personal Account</h3>
	</div>
	</div>
	<div class="row">
    <div class="col-lg-12">
    	<div class="col-sm-5" style="background-color: #4286f4; border-radius: 5px 5px 5px;">
    	<?php
    	$name = $_SESSION['Username'];
    	$sql = mysql_query($connect, "SELECT Concat(Surname,',',Fname,' ',Mi), otherinfo.Currency, otherinfo.Acc_no, otherinfo.Bal_acc, otherinfo.Address, otherinfo.Contact, otherinfo.Email, otherinfo.Gender, otherinfo.Pin, login_tbl.Un FROM login_tbl INNER JOIN accounts ON accounts.LID = login_tbl.LID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID where login_tbl.us = '$name';");


    	?>
    		<label style="font-size: 20px; font-style: bold;">Fullname :<?php ?> </label>
    		<br/>
    		<label style="font-size: 20px; font-style: bold;">Fullname : </label>
    	</div>
    </div>
    </div>

</div>
</div>
</body>
</html>