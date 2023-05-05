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
             echo( 
			 "<br/>第".$a++."筆".
		   "<br/>原本學號:".$row['id1'].
		   "<br/>第一學期學業成績:".$row['academic_performance1'].
		   "<br/>第二學期學業成績:".$row['academic_performance2'].
		   "<br/>第一學期操行成績:".$row['performance1'].
		   "<br/>第二學期操行成績:".$row['performance2'].
			 "<br/>".
		   "<br/>"
			 );
       }
    ?>