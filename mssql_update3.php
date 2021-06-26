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
        $time=$_POST['time'];
        $unit=$_POST['unit'];
		$expertise=$_POST['expertise'];
        $application_form=$_POST['application_form'];
        $signature=$_POST['signature'];
		
		
		echo "原本學號：".$id1;
        echo "<br />";
        echo "可工讀時間：".$time;
        echo "<br />";
        echo "擬工讀單位：".$unit;
        echo "<br /><br />";
        echo "工作志願及專長：".$expertise;
        echo "<br />";
        echo "申請資格：".$application_form;
        echo "<br />";
        echo "導師簽章：".$signature;
        echo "<br /><br />";
        
       
       $sql="UPDATE study_qualification SET id1='$id1',time='$time',unit='$unit',expertise='$expertise',application_form='$application_form'
	   ,signature='$signature'
	   WHERE id1='$id1'";
       $query=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
      
       $sql2="select * from study_qualification";
       $result=sqlsrv_query($conn,$sql2)or die("sql error".sqlsrv_errors());
       
	   $a = 1;
	   
       echo "讀取study_qualification的值：<br />";
       while($row=sqlsrv_fetch_array($result)){
             //echo ("<table border=1px><tr>");
             echo( 
			 "<br/>第".$a++."筆".
		   "<br/>原本學號:".$row['id1'].
		   "<br/>可工讀時間:".$row['time'].
		   "<br/>擬工讀單位:".$row['unit'].
		   "<br/>工作志願及專長:".$row['expertise'].
		   "<br/>申請資格:".$row['application_form'].
		   "<br/>導師簽章:".$row['signature'].
             //echo ("</tr></table>");
             //echo ("<hr />");
			 "<br/>".
		   "<br/>"
			 );
       }
    ?>