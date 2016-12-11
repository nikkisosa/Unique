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
    <h3 class="page-header">Personal Information</h3>
	</div>
	</div>
	<div class="jumbotron" style="background-color: #4286f4;">
	<div class="row">
    <div class="col-lg-12">
    
    	<div class="col-sm-5" style="border-radius: 5px 5px 5px;">
    	<?php
    	$name = $_SESSION['Username'];
    	$sql = mysqli_query($connect, "SELECT Concat(Surname,', ',Fname,' ',Mi), otherinfo.Currency, otherinfo.Acc_no, otherinfo.Bal_acc, otherinfo.Address, otherinfo.Contact, otherinfo.Email, otherinfo.Gender, otherinfo.Pin, login_tbl.Un FROM login_tbl INNER JOIN accounts ON accounts.LID = login_tbl.LID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID where login_tbl.un = '$name';");

    		while ($rows = mysqli_fetch_array($sql)) {
    			$full = $rows[0];
    			$gender = $rows[7];
    			$add = $rows[4];
    			$Contact = $rows[5];
    			$Email = $rows[6];

    		}
    	?>

    		<label style="font-size: 20px; font-style: bold;">Fullname :&nbsp <?php echo $full; ?> </label>
    		<br/>
    		<br/>
    		<label style="font-size: 20px; font-style: bold;">Gender :&nbsp <?php echo $gender; ?> </label>
    		<br/>
    		<br/>
    		<label style="font-size: 20px; font-style: bold;">Address :&nbsp <?php echo $add; ?> </label>
    		<br/>
    		<br/>
    		<label style="font-size: 20px; font-style: bold;">Contact :&nbsp <?php echo $Contact; ?> </label>
    		<br/>
    		<br/>
    		<label style="font-size: 20px; font-style: bold;">Email :&nbsp <?php echo $Email; ?> </label>

    	</div>
    </div>
    </div>
    </div>
    </div>

</div>
</div>
<div id="page-wrapper">
   <div class="container">
      <!-- Page Heading -->
    <div class="row">
    <div class="col-lg-12">
    <h3 class="page-header">Account Informaion</h3>
	</div>
	</div>
	<div class="jumbotron" style="background-color: #4286f4;">
	<div class="row">
    <div class="col-lg-12">
    
    	<div class="col-sm-5" style="border-radius: 5px 5px 5px;">
    	<?php
    	$name = $_SESSION['Username'];
    	$sql = mysqli_query($connect, "SELECT Concat(Surname,', ',Fname,' ',Mi), otherinfo.Currency, otherinfo.Acc_no, otherinfo.Bal_acc, otherinfo.Address, otherinfo.Contact, otherinfo.Email, otherinfo.Gender, otherinfo.Pin, login_tbl.Un FROM login_tbl INNER JOIN accounts ON accounts.LID = login_tbl.LID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID where login_tbl.un = '$name';");

    		while ($rows = mysqli_fetch_array($sql)) {
    			$full = $rows[2];
    			$Bal = $rows[3];
    			$Currency = $rows["Currency"]; 
    			$Pin = $rows["Pin"];

    		}
    	?>
    		<label style="font-size: 20px; font-style: bold;">Account No :&nbsp <?php echo $full; ?> </label>
    		<br/>
    		<br/>
    		<label style="font-size: 20px; font-style: bold;">Balance Account :&nbsp <?php echo  $Currency.'&nbsp'.$Bal; ?> </label>
    		<br/>
    		<br/>
    		<label style="font-size: 20px; font-style: bold;">Pin:&nbsp *********** </label>

    	</div>
    </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>