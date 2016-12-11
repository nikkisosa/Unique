<?php include ('include/header.php');
	  include ('db/db.php'); ?>

	  		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

<?php
if(!$_SESSION['Username'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}


$name = $_SESSION['Username'];
$sql = "SELECT history.AmountPay, history.TotalAmount, history.Date, otherinfo.Currency FROM accounts INNER JOIN bank ON bank.AID = accounts.AID INNER JOIN history ON history.BID = bank.BID INNER JOIN login_tbl ON accounts.LID = login_tbl.LID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID WHERE login_tbl.Un = '$name' ORDER BY history.dATE desc;";
$result = $connect->query($sql);


echo "<table>";
echo "<th class='text-center'>PAID AMOUNT</th><th class='text-center'>TOTAL AMOUNT</th><th class='text-center'>DATE</th>";

     while($row = $result->fetch_assoc()) {
     	$AmountPay = $row["AmountPay"];
     	$TotalAmount = $row["TotalAmount"];
     	$date = $row["Date"];
       echo '<tr><td>'.$row["Currency"].'&nbsp'.$AmountPay.'<td>'.$row["Currency"].'&nbsp'.$TotalAmount.'</td><td>'.$date.'</td></tr>';
     }
  
     echo "</table>";


$connect->close();
?>
</div>
</div>
</body>
</html>