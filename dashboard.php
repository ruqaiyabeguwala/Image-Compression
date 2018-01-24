<?php
include "mvc/control.php";
session_start();

if(!isset($_SESSION['id'])){
    header('location:logout.php');
}
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
 <div class="container">
  <div class="row">
    <a href="logout.php" class="btn btn-success">Logout</a>
     <h1 style="text-align:center;margin-bottom:50px">Dashboard</h1>
    
    
    </div>
     <div class="row" style="min-height:1000px">
      
       <div class=" col-sm-12">
       <a class="btn btn-success" href="addImage.php" style="margin-top:20px;width:900px;margin-bottom:30px;">Add image</a>
        <form action="" method="post">
            <input type="text" style="display:none;" name="id" value="<?php echo $_SESSION['id']; ?>">
            <input type="submit" name="show" class="btn btn-success" value="Show Images" style="width:900px;margin-bottom:30px">
        </form>
         <?php
         if(isset($_POST['show'])){
              if($images){
        foreach(@$images as $img){
         
           ?>
         
          <img src="<?php echo $img->img ?>" alt="" width="200px" height="200px" style="margin-left:5px;margin-left:5px">
            <?php  
        }
              }
             else{
                 echo "No images found";
             }
        }
         
         ?>
         </div>
         
     </div>
 </div>   
</body>
</html>