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
        $academic_performance1=$_POST['academic_performance1'];
        $academic_performance2=$_POST['academic_performance2'];
		$performance1=$_POST['performance1'];
        $performance2=$_POST['performance2'];
        
		
		echo "原本學號:".$id1;
        echo "<br />";
        echo "第一學期學業成績：".$academic_performance1;
        echo "<br />";
        echo "第二學期學業成績：".$academic_performance2;
        echo "<br /><br />";
        echo "第一學期操行成績：".$performance1;
        echo "<br />";
        echo "第二學期操行成績：".$performance2;
        echo "<br /><br />";
       
       $sql="UPDATE achievement SET id1='$id1',academic_performance1='$academic_performance1'
	   ,academic_performance2='$academic_performance2',performance1='$performance1',performance2='$performance2'
	   WHERE id1='$id1'";
       $query=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
      
       $sql2="select * from achievement";
       $result=sqlsrv_query($conn,$sql2)or die("sql error".sqlsrv_errors());
       
	   $a = 1;
	   
       echo "讀取achievement的值：<br />";
       while($row=sqlsrv_fetch_array($result)){
             //echo ("<table border=1px><tr>");
             echo( 
			 "<br/>第".$a++."筆".
		   "<br/>原本學號:".$row['id1'].
		   "<br/>第一學期學業成績:".$row['academic_performance1'].
		   "<br/>第二學期學業成績:".$row['academic_performance2'].
		   "<br/>第一學期操行成績:".$row['performance1'].
		   "<br/>第二學期操行成績:".$row['performance2'].
             //echo ("</tr></table>");
             //echo ("<hr />");
			 "<br/>".
		   "<br/>"
			 );
       }
    ?>