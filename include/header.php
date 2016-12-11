
<?php  
include ('db/db.php');
session_start();//session starts here
if(isset($_SESSION['Username']))
{
    if(!empty($_SESSION['Username']))
    {
        
        
    }
    else
    {
      header('location:../index.php');
    }
}
?>
<!Doctype HTML>
<html lang = "en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content = "IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>CURE</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link href="../css/font-awesome.min.css" rel="stylesheet">
 <link rel="shortcut icon"  href="../icons/pageicon.ico">
	<script src="../js/jquery-1.11.2.min.js"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
  <link href="../css/sidebar.css" rel="stylesheet">

</head>

<body>

		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CURE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dashboard.php"><span class="glyphicon glyphicon-rub"></span>&nbsp Payment</a></li>
        <li class="dropdown">
        <li><a href="#Accounts" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp Accounts <span class="caret"></span></a>
        
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php 
            $name = $_SESSION['Username'];
            $query = mysqli_query($connect,"select Concat(Surname,',',Fname,' ',Mi) from accounts INNER join LOGIN_TBL ON LOGIN_TBL.LID = Accounts.LID where un = '$name'");
            if($row = mysqli_fetch_array($query))
            {
              echo $row[0];
            }
            ?> </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> Change Password</a></li>
            <li><a href="History.php"><span class="glyphicon glyphicon-calendar"></span> History Of Payment</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
          </ul>
        </li>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>