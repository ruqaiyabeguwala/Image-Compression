<?php
include "mvc/control.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   
</head>
<body>
    
    
    <form action="" method="post" >
    <h3>Register</h3>
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
       <h3>Login</h3>   
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
 

</body>
</html>