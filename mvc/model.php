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
            echo "data inserted successfully";
        }
        
    }
      function login($con,$table,$mail,$pas)
    {
       
        $qry="select * from $table";
        $ex=$con->query($qry);
          while($res=$ex->fetch_object()){
              if(($res->email==$mail) && ($res->pass==$pas)){
                  header('location:addImage.php');
              }
              else{
                  echo "Incorrect username and password";
              }
          }
        if($ex>0){
            echo "data inserted successfully";
        }
        
    }
    function compress($src, $dest) {

		$info = getimagesize(src);

		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($src);

		else if ($info['mime'] == 'image/gif') 
			$image = imagecreatefromgif($src);

		else if ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($src);

		imagejpeg($image, $dest, 75);

		return $dest;
	}
}

?>