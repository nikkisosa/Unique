<?php include ('db/db.php'); 

if(!$_SESSION['Username'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}

$bill = trim($_POST['Bill']);
$calculate = trim($_POST['Total']);
$name = 'admin';
//Formula
// equal = bill - calculate
if($bill > $calculate)
{
	echo '<script>Alert("Working");</script>';
}
else if($bill <= $calculate)
{
	$equal = $calculate - $bill;
	if($calculate == $bill)
	{
		

		$date = date('m-d-Y');
		$query = mysqli_query($connect,"insert into history(BID,AmountPay,TotalAmount,Date)values((SELECT max(bank.bid) FROM login_tbl INNER JOIN accounts ON accounts.LID = login_tbl.LID INNER JOIN bank ON bank.AID = accounts.AID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID where login_tbl.Un = '$name'),'$bill','$calculate','$date');");


		$updateQUery = mysqli_query($connect,"UPDATE accounts INNER JOIN bank ON bank.AID = accounts.AID INNER JOIN login_tbl ON accounts.LID = login_tbl.LID set bank.Current_bal = '0', bank.Previous_bal = '0' where login_tbl.un = '$name';");

//$updateBal = mysqli_query();
	}
	else
	{
		$date = date('m-d-Y h:i:sa');
		$query = mysqli_query($connect,"insert into history(BID,AmountPay,TotalAmount,Date)values((SELECT max(bank.bid) FROM login_tbl INNER JOIN accounts ON accounts.LID = login_tbl.LID INNER JOIN bank ON bank.AID = accounts.AID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID where login_tbl.Un = '$name'),'$bill','$calculate','$date'.);");


		$updateQUery = mysqli_query($connect,"UPDATE accounts INNER JOIN bank ON bank.AID = accounts.AID INNER JOIN login_tbl ON accounts.LID = login_tbl.LID set bank.Current_bal = '0', bank.Previous_bal = '$equal' where login_tbl.un = '$name';");

		$updateQueryInfo = mysqli_query($connect,"UPDATE accounts INNER JOIN otherinfo ON otherinfo.AID = accounts.AID INNER JOIN login_tbl ON accounts.LID = login_tbl.LID set otherinfo.Bal_acc = otherinfo.Bal_acc - '$bill' where login_tbl.Un = '$name'");
	}
}

?>

