<?php
header("Content-Type:text/html; charset=utf-8");


?>
<html>
<?php
header("Content-Type:text/html; charset=utf-8");


?>
<!-- saved from url=(0076)http://mepopedia.com/~web102-a/midterm/hw03_1015445024/graphic%20design.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>分析報表</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="wrapper-02">
  <div id="header">
         <h1>分析報表</h1>
  </div>
    
<div id="contents">
<?php   		
		include"db_connect.php";
		if($_POST['name']!=''){
        $name=$_POST['name'];
		$sql="SELECT TOP (1000) [department]
				,[grade]
				  ,[id1]
				  ,[name]
				  ,[sex]
				  ,[id_number]
				  ,[birth_year]
				  ,[birth_month]
				  ,[birthday]
				  ,[mail]
				  ,[tel]
				  ,[academic_performance1]
				  ,[academic_performance2]
				  ,[performance1]
				  ,[performance2]
				  ,[family_size]
				  ,[number_of_students]
				  ,[number_of_employees]
				  ,[parent_Career]
				  ,[income_situation]
				  ,[other]
				  ,[time]
				  ,[unit]
				  ,[expertise]
				  ,[application_form]
				  ,[signature]
					FROM [test1].[dbo].[apple]";
		}
		else{
			$sql="SELECT TOP (1000) [department]
				  ,[grade]
				  ,[id1]
				  ,[name]
				  ,[sex]
				  ,[id_number]
				  ,[birth_year]
				  ,[birth_month]
				  ,[birthday]
				  ,[mail]
				  ,[tel]
				  ,[academic_performance1]
				  ,[academic_performance2]
				  ,[performance1]
				  ,[performance2]
				  ,[family_size]
				  ,[number_of_students]
				  ,[number_of_employees]
				  ,[parent_Career]
				  ,[income_situation]
				  ,[other]
				  ,[time]
				  ,[unit]
				  ,[expertise]
				  ,[application_form]
				  ,[signature]
					FROM [test1].[dbo].[apple] ";
		}

		$qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
			
			 $a = 1;
				
		
		while($row=sqlsrv_fetch_array($qury)){
			/*while ($a<$row=sqlsrv_fetch_array($qury)){
			echo "<br/>第".$a++."筆";*/
		   echo (
		   "<br/>第".$a++."筆".
		   "<br/>系所:".$row['department'].
		   "<br/>年級:".$row['grade'].
		   "<br/>學號:".$row['id1'].
		   "<br/>姓名:".$row['name'].
		   "<br/>性別:".$row['sex'].
		   "<br/>身分證字號:".$row['id_number'].
		   "<br/>出生年:".$row['birth_year'].
		   "<br/>出生月: ".$row['birth_month'].
		   "<br/>出生日: ".$row['birthday'].
		   "<br/>Ma i l 帳號:".$row['mail'].
		   "<br/>聯絡電話:".$row['tel'].
		   "<br/>第一學期學業成績:".$row['academic_performance1'].
		   "<br/>第二學期學業成績: ".$row['academic_performance2'].
		   "<br/>第一學期操行成績".$row['performance1'].
		   "<br/>第二學期操行成績:".$row['performance2'].
		   "<br/>家庭人數: ".$row['family_size'].
		   "<br/>就學人數:".$row['number_of_students'].
		   "<br/>工作人數:".$row['number_of_employees'].
		   "<br/>家長職業:".$row['parent_Career'].
		   "<br/>收入情形:".$row['income_situation'].
		   "<br/>其他:".$row['other'].
		   "<br/>可工讀時間：".$row['time'].
		   "<br/>擬工讀單位：".$row['unit'].
		   "<br/>申請資格：".$row['expertise'].
		   "<br/>導師簽章:".$row['signature'].
		   "<br/>".
		   "<br/>"
		   );
  }
   //echo "</td>";
		
?>
</div>
</body></html>