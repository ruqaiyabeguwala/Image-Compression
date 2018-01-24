<?php
include "config.php";
$obj= new connection();
$con=$obj->connect();
class model{
    function insert($con,$table,$data)
    {
        $key=implode(",",array_keys($data));
        $value=implode("','",array_values($data));
        $qry="insert into $table($key) values('$value')";
        $ex=$con->query($qry);
        if($ex>0){
           echo '<script language="javascript">alert("Registration successfull")</script>';
        }
        
    }
      function login($con,$table,$mail,$pas)
    {
       
        $qry="select * from $table";
        $ex=$con->query($qry);
          while($res=$ex->fetch_object()){
              if(($res->email==$mail) && ($res->pass==$pas)){
                  session_start();
                  $_SESSION['id']=$res->id;
                  $_SESSION['name']=$res->name;
                  header('location:dashboard.php');
              }
              else{
                  echo '<script language="javascript">alert("Incorrect password.")</script>';
              }
          }
        
    }
    
   
    function up($con,$tmp,$nm,$type,$id){
        if(empty($type)) {
            echo "error";
            exit();
        }
        $ext=null;
       switch($type)
       {
           case 'image/bmp': $ext= '.bmp';
           case 'image/gif': $ext= '.gif';
           case 'image/jpeg': $ext= '.jpg';
           case 'image/png': $ext= '.png';
       }

        $imagename=date("d-m-Y")."-".time().$ext;
        $path="files/".$imagename;
         $ex=move_uploaded_file($tmp,$path);
        $info = getimagesize($path);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($path);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($path);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($path);

    		imagejpeg($image, $path, 60);
        $qry= "insert into images(id,img) values('$id','$path')";
        $ex1=$con->query($qry); 
     if($ex1>0)
              {
              	echo '<script language="javascript">alert("File successfully Uploaded")</script>';
              	
              } 
        else{
          echo '<script language="javascript">alert("Upload unsuccessfull")</script>';
        }
    }
    function view($con,$id){
        $qry = "select * from images where id='$id'";
        $ex=$con->query($qry);
        while($res=$ex->fetch_object()){
            $rs[]=$res;
            
        }
        return @$rs;
    }
    
}

?>