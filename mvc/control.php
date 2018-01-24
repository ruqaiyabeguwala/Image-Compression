<?php
include "model.php";
$obj_model= new model();
if(isset($_POST['sub']))
{
    $data=array(
        'name'=>$_POST['user'],
        'email'=>$_POST['mail'],
        'pass'=>$_POST['pass'],
        
    );
    $obj_model->insert($con,'register',$data);
}
if(isset($_POST['login'])){
    $email=$_POST['luser'];
               $pass=$_POST['lpass'];
               
    $obj_model->login($con,'register',$email,$pass);
}
 

       if(isset($_POST['save'])){
           
           
         if ($_FILES["myfile"]["error"] > 0) {
        			$error = $_FILES["file"]["error"];
    		} 
    		else if (($_FILES["myfile"]["type"] == "image/gif") || 
			($_FILES["myfile"]["type"] == "image/jpeg") || 
			($_FILES["myfile"]["type"] == "image/png") || 
			($_FILES["myfile"]["type"] == "image/pjpeg")) {

                 $fname=$_FILES['myfile']['name'];
         	  $type=$_FILES['myfile']['type'];
         	  $size=$_FILES['myfile']['size'];
         	  $tmp_name=$_FILES['myfile']['tmp_name'];
              $path="files/";
              $fullpath=$path.$fname; 
               $obj_model->up($con,$tmp_name,$fname,$type,$_POST['id']); 
        			

    		}else {
        			$error = "Uploaded image should be jpg or gif or png";
    		}
       }       

 


?>