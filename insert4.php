<?php
header("Content-Type:text/html; charset=utf-8");


?>
<html>
<?php
header("Content-Type:text/html; charset=utf-8");


?>
<!-- saved from url=(0076)http://mepopedia.com/~web102-a/midterm/hw03_1015445024/graphic%20design.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>資料已送出</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="wrapper-02">
  <div id="header">
         <h1>資料已送出</h1>
  </div>
    
<div id="contents">

  <?php
  header("Content-Type:text/html; charset=utf-8");
  $serverName="DESKTOP-933EBBG\SQLEXPRESS";
  $connectionInfo=array("Database"=>"test1","UID"=>"sandy123","PWD"=>"user0404","CharacterSet" => "UTF-8");
  $conn=sqlsrv_connect($serverName,$connectionInfo);

  $name=$_POST['id1'];
  $phone=$_POST['time'];
  $mail=$_POST['unit'];
  $comment=$_POST['expertise'];
  $comment1=$_POST['application_form'];
  $comment2=$_POST['signature'];
  $name = strval($name);
  $phone = strval($phone);
  $mail = strval($mail);
  $comment = strval($comment);
  $comment1 = strval($comment1);
  $comment2 = strval($comment2);
   print_r($comment);
   print_r($comment1);
   print_r($comment2);
  $sql="INSERT INTO dbo.study_qualification(id1,time,unit,expertise,application_form,signature) 
  VALUES('$name','$phone','$mail','$comment','$comment1','$comment2')";

  
  $qury=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
  ?>

    
</div>


</body></html>