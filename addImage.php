
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
   <div class="container-fluid">
     
      
      <a href="dashboard.php" class="btn btn-success">Return to Dashboard</a>
       <a href="logout.php" style="text-align:right;" class="btn btn-success">logout</a>
       <div class="row">
          <h2 style="text-align:center;margin-bottom:50px">Compress your image</h2>
           <div class="col-sm-offset-3 col-sm-5" style="border-style:inset;min-height:300px">
               <form action="" method="post" enctype="multipart/form-data">
                   <label for="">Select the file</label>
                   <br>
                   <input type="file" name="myfile">
                   <br>
                   <input type="text" value="<?php echo  $_SESSION['id'] ; ?>" style="display:none" name="id">
                   <input type="submit" name="save" class="btn btn-success">
               </form>
               
           </div>
           
       </div>
       
   </div>
   
</body>
</html>