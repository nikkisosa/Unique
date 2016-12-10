<?php include ('db/db.php'); 


$bill = trim($_POST['Bill']);
$calculate = trim($_POST['Total']);

//Formula
// equal = bill - calculate
if($bill >= $calculate)
{
	
	$equal = ($bill - $calculate);

$date = date('m-d-Y');
$query = mysqli_query($connect,"insert into history(BID,AmountPay,TotalAmount,Date)values((SELECT max(bank.bid) FROM login_tbl INNER JOIN accounts ON accounts.LID = login_tbl.LID INNER JOIN bank ON bank.AID = accounts.AID INNER JOIN otherinfo ON otherinfo.AID = accounts.AID where login_tbl.Un = 'admin'),'$bill','$calculate','$date');");


$updateQUery = mysqli_query($connect,"UPDATE accounts INNER JOIN bank ON bank.AID = accounts.AID INNER JOIN login_tbl ON accounts.LID = login_tbl.LID set bank.Current_bal = '0', bank.Previous_bal = '$equal' where login_tbl.un = 'admin';");
}
}
else
{

echo '<p>Unable to process! your amount is greater than to your bill</p>';
?>

