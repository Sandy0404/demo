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
        $serverName=".";
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
             echo( 
			 "<br/>第".$a++."筆".
		   "<br/>原本學號:".$row['id1'].
		   "<br/>可工讀時間:".$row['time'].
		   "<br/>擬工讀單位:".$row['unit'].
		   "<br/>工作志願及專長:".$row['expertise'].
		   "<br/>申請資格:".$row['application_form'].
		   "<br/>導師簽章:".$row['signature'].
			 "<br/>".
		   "<br/>"
			 );
       }
    ?>