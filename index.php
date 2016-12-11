<?php  
session_start();//session starts here
if(isset($_SESSION['Username']))
{
    if(!empty($_SESSION['Username']))
    {
        
        header('location:dashboard.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CURE</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">


    </head>

    <body>
    <style>
body  {
    background-color: rgb(36,49,60);
}
</style>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            
                            <div class="description">
                                <p>
                               
                                </p>
                            </div>
 <form role="form" action="" method="post" class="login-form">
    <center>

<div style=' margin-top:10%;
   background-color: rgb(34,34,34);
    width: 300px;
    border: 1.5px solid rgb(34,34,34);
    padding: 3px;
    border-radius:10px;
    border-style: outset;
    border-bottom-color: rgb(45,45,45);
    border-width:2.5px;
    border-right-color: rgb(45,45,45);
    opacity: 0.8;
     box-shadow: 10px 10px 5px rgb(45,45,45);'>

<div style=' margin-top:6%;
    background-color: rgb(34,49,34);
    width: 300px;
    border: 1.5px solid rgb(34,34,34);
    padding: 3px;
    border-radius:10px;
    border-style: outset;
    border-bottom-color: rgb(45,45,45);
    border-width:2.5px;
    border-right-color: rgb(45,45,45);'>

<div  style='
border: 1px solid rgb(34,34,34);
border-bottom-color: rgb(100,100,100);
background-color:  rgb(34,34,34); '>
<p style=' margin-top:5px; color:white; font-size:18px;'>Login</p> 
</div>  
<input       style='border: 0.5px solid grey; 
                margin-top:25px; margin-left:5px; padding: 13px 16px; font-size:16px; background-color: rgb(34,34,34); color:white;' type='text' name ='Username' id='Username' placeholder= 'Username' required '  > 
<input  style='border: 0.5px solid grey; 
                margin-top:10px; margin-left:5px; padding: 13px 16px; font-size:16px; background-color: rgb(34,34,34); color:white;' type='password' name ='Password' id='Password' placeholder= 'Password' required

                ' >

<button type='submit' name="submit" 
style='
 border-radius:7px;
 margin-top:8px; 
 margin-bottom:15px;
 background-color:rgb(26,177,136);  
 border: none; 
 color:white;
 padding: 14px 85px;
 font-size:16px;
 opacity:none;'> 
 Login 
</button><br>
 <?php  
  
        include("db/db.php");  
          
        if(isset($_POST['submit']))  
        {  
            $user=$_POST['Username'];  
            $pass=$_POST['Password'];  
          
            $check_user="SELECT login_tbl.Un, login_tbl.pw FROM login_tbl
 WHERE login_tbl.un=? AND login_tbl.pw=?";  
          
        $stmt = mysqli_prepare($connect,$check_user);
          
          $stmt->bind_param("ss", $user,$pass);
          $stmt->execute();
          
            $result = $stmt->get_result();  
            
            if(mysqli_num_rows($result))  
            {  
                while($rows = mysqli_fetch_assoc($result))
                {
                        echo "<script>window.open('dashboard.php','_self')</script>";  
                $_SESSION['Username']=$user;  
                    
                }
                
          
            }  
            else  
            {  
                $error = " <p style='color:red;'> Username or password is incorrect! </p> ";
              echo $error;  
            }  
        
        }
        ?>  
</div>
  
<footer style='margin-top:15px; font-size:12px; color: rgb(230,230,230);'>  
    ©2016 CURE. All rights reserved.
</footer>

                                
                                </form>
                            </div>
                            </center>
                            </form>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

        


        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body>

</html>