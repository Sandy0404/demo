<?php
     header("Content-Type:text/html; charset=utf-8");
     $serverName=".";
     $connectionInfo=array("Database"=>"test1","UID"=>"sandy123","PWD"=>"user0404","CharacterSet" => "UTF-8");
     $conn=sqlsrv_connect($serverName,$connectionInfo);
         if($conn){
             echo "Success!!!";
         }else{
             echo "Error!!!<br />";
             die(print_r(sqlsrv_errors(),true));
         }            
?>