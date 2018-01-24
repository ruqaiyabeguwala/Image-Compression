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

?>