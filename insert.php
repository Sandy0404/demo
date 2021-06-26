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

		$name=$_POST['department'];
		$phone=$_POST['grade'];
		$mail=$_POST['id1'];
		$comment=$_POST['name'];
		$comment1=$_POST['sex'];
		$comment2=$_POST['id_number'];
		$comment3=$_POST['birth_year'];
		$comment4=$_POST['birth_month'];
		$comment5=$_POST['birthday'];
		$comment6=$_POST['mail'];
		$comment7=$_POST['tel'];
		
		
		$sql="INSERT INTO dbo.basic_information(department,grade,id1,name,sex,id_number,birth_year,birth_month,birthday,mail,tel) 
		VALUES('$name','$phone','$mail','$comment','$comment1','$comment2','$comment3','$comment4','$comment5','$comment6','$comment7')";

		
		$qury=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
		?>

			 
</div>


</body></html>


