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
		$phone=$_POST['academic_performance1'];
		$mail=$_POST['academic_performance2'];
		$comment=$_POST['performance1'];
		$comment1=$_POST['performance2'];
		
		
		
		$sql="INSERT INTO dbo.achievement(id1,academic_performance1,academic_performance2,performance1,performance2) 
		VALUES('$name','$phone','$mail','$comment','$comment1')";

		
		$qury=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
		?>

			 
</div>


</body></html>