<?php
class connection{

 function connect()
 {
   
   $server='localhost';
   $user='root';
   $pass='';
   $db= 'image_compression';
     $con= new mysqli($server,$user,$pass,$db);
     return $con;
 }

}