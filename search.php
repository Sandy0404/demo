<html>
<?php
header("Content-Type:text/html; charset=utf-8");
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>國立嘉義大學</title>
</head>

	<body id="wrapper-02">
	<div id="header">
        <h1><a href="Home.html">國立嘉義大學</a></h1>
        <p class="copy">工讀生申請表 </p>

        <?php
        $Add_information = array(
        "基本資料" => "insert.html",
        "成績" => "insert2.html",
        "家庭概況" => "insert3.html",
        "申請工讀資格" => "insert4.html"
        );
        ?>
        <ul id="navi">
            <li id="navi_01">
                <a href="#">新增資料</a>
                <ul id="a1">
                    <?php foreach ($Add_information as $page => $url): ?>
                    <li><a href="<?php echo $url; ?>"><?php echo $page; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
			
            <li id="navi_02">
                <a href="search.html">查詢資料</a>
            </li>
			
            <?php
            $update_information = array(
            "基本資料" => "mssql_input_update.php",
            "成績" => "mssql_input_update1.php",
            "家庭概況" => "mssql_input_update2.php",
            "申請工讀資格" => "mssql_input_update3.php"
            );
            ?>
            <li id="navi_03">
                <a href="update.html">修改資料</a>
				<ul id="a1">
                <?php foreach ($update_information as $page => $url): ?>
                    <li><a href="<?php echo $url; ?>"><?php echo $page; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
			
            <li id="navi_04">
                <a href="report.html">分析報表</a>
            </li>
			
            <li id="navi_05">
                <a href="DB.html">系統手冊</a>
            </li>
        </ul>
	</div>
<div id="contents">
<?php     
          include"db_connect.php";

          if($_GET['name']!=''){
            $name=$_GET['name'];
            $sql="SELECT * FROM dbo.apple WHERE id1='$name'";
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
                "<br/>工作志願及專長：".$row['application_form'].
                "<br/>申請資格：".$row['expertise'].
                "<br/>導師簽章:".$row['signature']."<br/>"
                );
          }
?>
</div>
</body>
</html>