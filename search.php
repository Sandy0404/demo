<?php
header("Content-Type:text/html; charset=utf-8");
?>
<html>
<!-- saved from url=(0076)http://mepopedia.com/~web102-a/midterm/hw03_1015445024/graphic%20design.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>查詢</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body id="wrapper-02">
  <div id="header">
         <h1>查詢</h1>
  </div>
<div id="contents">
<?php     
  include"db_connect.php";
  if($_GET['name']!=''){
        $idasd=$_GET['name'];
  //$idasd = strval($idasd[0]);
  $sql="SELECT * FROM dbo.apple WHERE id1='$idasd'";
  }
  else{
   $sql="SELECT * FROM dbo.apple ";
   echo("未正確輸入 請重新查詢");
  }
  $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
  while($row=sqlsrv_fetch_array($qury)){
   echo (
   "<br/>系所:".$row['department'].
   "<br/>年級: ".$row['grade'].
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
   "<br/>導師簽章:".$row['signature']."<br/>"
   );
  }
?>
</div>
</body></html>