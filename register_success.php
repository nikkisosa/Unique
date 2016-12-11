<?php include ('db/db.php'); 

if(!$_SESSION['Username'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}

$user = trim($_POST['user']);
$pass = trim($_POST['pass']);

$SQL1 = mysqli_query($connect,"INSERT INTO Login_tbl (Un,Pw) VALUES ('$user', '$pass');");

?>