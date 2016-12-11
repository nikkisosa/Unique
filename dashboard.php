<?php include ('include/header.php');
	  include ('db/db.php');
  
if(isset($_SESSION['Username']))
{
  $name = $_SESSION['Username'];
    if(!empty($_SESSION['Username']))
    {
        
        
    }
    else
    {
      header('location:../index.php');
    }
}
?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
   <link rel="shortcut icon"  href="icons/pageicon.ico">
	
<div class="container" style="margin-top: 60px;">
	<div class="jumbotron">
	
	
	<div id="page-wrapper">
   <div class="container-fluid">
      <!-- Page Heading -->
    <div class="row">
    <div class="col-lg-12">
    <h3 class="page-header">Account Summary for Account number : 
		<?php 
    $name = $_SESSION['Username'];
			$query = mysqli_query($connect,"SELECT login_tbl.Un, Concat(Surname,',',Fname,' ',Mi), otherinfo.Acc_no FROM accounts INNER JOIN otherinfo ON otherinfo.AID = accounts.AID INNER JOIN login_tbl ON accounts.LID = login_tbl.LID WHERE login_tbl.Un = '$';");
			while ($rows = mysqli_fetch_array($query)) {
				if(isset($rows[1]) ==  isset($rows[1]))
				{
					echo $rows[2];
				}
			}
			
		 ?>
			 </h3>
</div>
</div>

<?php
$name = $_SESSION['Username'];
$sql = "SELECT bank.Current_bal, bank.Previous_bal, bank.Due, otherinfo.Currency FROM accounts INNER JOIN login_tbl ON accounts.LID = login_tbl.LID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID INNER JOIN bank ON bank.AID = accounts.AID WHERE login_tbl.Un = '$name';";
$result = $connect->query($sql);


echo "<table>";
echo "<th class='text-center'>BALANCE FROM PREVIOUS BILLING</th><th class='text-center'>CURRENT BILL</th><th class='text-center'>Total Amount Due</th>";

     while($row = $result->fetch_assoc()) {
     	$prev = $row["Previous_bal"];
     	$current = $row["Current_bal"];

     	$calculate =  $prev + $current;
       echo '<tr><td>'.$row["Currency"].'&nbsp'.$row["Previous_bal"].'<td>'.$row["Currency"].'&nbsp'.$row["Current_bal"].'</td><td>'.$row["Currency"].'&nbsp'.$calculate.'</td></tr>';
     }
  
     echo "</table>";


$connect->close();
?>
<br/>
<div class="row">
  <div class="col-lg-3 pull-right">
    <input type="text" class="form-control" name="bill" id="bill" placeholder="Amount Bill(ex. 200,500,600..)">
    <br/>

    <input class="btn btn-primary" type="button" name="submit" id="btn" data-toggle="modal" data-target=".bs-example-modal-sm" value="Submit" style="background-color: #000080;">
 </div>
</div>

</div>
</div>

<!-- MY SCRIPT-->
<script src="js/jquery.js"></script>
    <script>
    $(document).ready(function() {
    
      $("#btn").click(function(){
           var bill =  $('#bill').val();
           //var calculate =  $('$calculate').val();
          $.ajax({
            type: "POST",
            url : "success_payment.php",
            data: {Bill:bill ,
            	  Total: <?php echo $calculate; ?>,
              },
            success:function(data){
              $('#bill').val('');
              
            }
          });
      });
  });
</script>
</body>
</html>
