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
		$phone=$_POST['family_size'];
		$mail=$_POST['number_of_students'];
		$comment=$_POST['number_of_employees'];
		$comment1=$_POST['parent_Career'];
		$comment2=$_POST['income_situation'];
		$comment3=$_POST['other'];
		
		
		
		$sql="INSERT INTO dbo.family_profile(id1,family_size,number_of_students,number_of_employees,parent_Career,income_situation,other) 
		VALUES('$name','$phone','$mail','$comment','$comment1','$comment2','$comment3')";

		
		$qury=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
		?>

			 
</div>


</body></html>