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
        $serverName="DESKTOP-933EBBG\SQLEXPRESS";
        $connectionInfo=array("Database"=>"test1", "UID"=>"sandy123", "PWD"=>"user0404", "CharacterSet"=>"UTF-8");
        $conn=sqlsrv_connect($serverName, $connectionInfo);
       
        
		$id1=$_POST['id1'];
        $family_size=$_POST['family_size'];
        $number_of_students=$_POST['number_of_students'];
		$number_of_employees=$_POST['number_of_employees'];
        $parent_Career=$_POST['parent_Career'];
        $income_situation=$_POST['income_situation'];
		$other=$_POST['other'];
		
		
		echo "原本學號：".$id1;
        echo "<br />";
        echo "家庭人數：".$family_size;
        echo "<br />";
        echo "就學人數：".$number_of_students;
        echo "<br /><br />";
        echo "工作人數：".$number_of_employees;
        echo "<br />";
        echo "家長職業：".$parent_Career;
        echo "<br />";
        echo "收入情形：".$income_situation;
        echo "<br /><br />";
        echo "其他：".$other;
        echo "<br /><br />";
       
       $sql="UPDATE family_profile SET id1='$id1',family_size='$family_size'
	   ,number_of_students='$number_of_students',number_of_employees='$number_of_employees',parent_Career='$parent_Career'
	   ,income_situation='$income_situation',other='$other'
	   WHERE id1='$id1'";
       $query=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
      
       $sql2="select * from family_profile";
       $result=sqlsrv_query($conn,$sql2)or die("sql error".sqlsrv_errors());
       
	   $a = 1;
	   
       echo "讀取family_profile的值：<br />";
       while($row=sqlsrv_fetch_array($result)){
             //echo ("<table border=1px><tr>");
             echo( 
			 "<br/>第".$a++."筆".
		   "<br/>原本學號:".$row['id1'].
		   "<br/>家庭人數:".$row['family_size'].
		   "<br/>就學人數:".$row['number_of_students'].
		   "<br/>工作人數:".$row['number_of_employees'].
		   "<br/>家長職業:".$row['parent_Career'].
		   "<br/>收入情形:".$row['income_situation'].
		   "<br/>其他:".$row['other'].
             //echo ("</tr></table>");
             //echo ("<hr />");
			 "<br/>".
		   "<br/>"
			 );
       }
    ?>