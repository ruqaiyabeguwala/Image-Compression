<?php
include "mvc/control.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <script type="application/javascript" src="js/bootstrap.min.js"></script>
   <script type="application/javascript" src="js/jquery-3.1.1.min.js"></script>
   <script type="application/javascript" src="js/jquery.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="container-fluid">
        <center>  <h1 >WELCOME</h1> </center>
       <div class="row" style="margin-top:30px">
            
            <div class="col-sm-offset-3 col-sm-3" style="border-style:inset;min-height:300px">
               <form action="" method="post" >
    <h3 style="text-align:center">Register</h3>
    <ul>
        <label for="">Enter User Name:</label>
        <input type="text" name="user" required>
        <br>
         <label for="">Enter Email:</label>
        <input type="email" name="mail" required>
        <br>
         <label for="">Enter Password:</label>
        <input type="password" name="pass" required>
        <br>
            <input type="submit" name="sub">
        
        
    </ul>
    </form>   
                
            </div>
            <div class="col-sm-offset-1 col-sm-3" style="border-style:inset;min-height:300px">
            <h3 style="text-align:center">Login</h3>   
        <form action="" method="post" >
    
    <ul>
        <label for="">Enter Email:</label>
        <input type="email" name="luser" required>
        <br>
         <label for="">Enter Password:</label>
        <input type="password" name="lpass" required>
        <br>
            <input type="submit" name="login" >
        
        
    </ul>
    </form>        
 
            
            </div>
            
            
        </div>
        
    </div>
    
    
    
   
       

</body>
</html>