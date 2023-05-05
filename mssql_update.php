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
       
		$department=$_POST['department'];
        $grade=$_POST['grade'];
        $id1=$_POST['id1'];
		$name=$_POST['name'];
        $sex=$_POST['sex'];
        $id_number=$_POST['id_number'];
		$birth_year=$_POST['birth_year'];
        $birth_month=$_POST['birth_month'];
        $birthday=$_POST['birthday'];
		$mail=$_POST['mail'];
        $tel=$_POST['tel'];
		
		echo "系所：".$department;
        echo "<br />";
        echo "年級：".$grade;
        echo "<br />";
        echo "原本學號：".$id1;
        echo "<br /><br />";
        echo "姓名：".$name;
        echo "<br />";
        echo "性別：".$sex;
        echo "<br />";
        echo "身分證字號：".$id_number;
        echo "<br /><br />";
        echo "出生年：".$birth_year;
        echo "<br />";
        echo "出生月：".$birth_month;
        echo "<br />";
        echo "出生日：".$birthday;
		echo "Ma i l 帳號：".$mail;
        echo "<br />";
        echo "聯絡電話：".$tel;
        echo "<br /><br />";
       
       $sql="UPDATE basic_information SET department='$department',grade='$grade',id1='$id1',name='$name',sex='$sex',id_number='$id_number',
	   birth_year='$birth_year',birth_month='$birth_month',birthday='$birthday',mail='$mail',tel='$tel'
	   WHERE id1='$id1'";
       $query=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
      
       $sql2="select * from basic_information";
       $result=sqlsrv_query($conn,$sql2)or die("sql error".sqlsrv_errors());
       
	   $a = 1;
	   
       echo "讀取basic_information的值：<br />";
       while($row=sqlsrv_fetch_array($result)){
             echo( 
                "<br/>第".$a++."筆".
                "<br/>系所:".$row['department'].
                "<br/>年級:".$row['grade'].
                "<br/>原本學號:".$row['id1'].
                "<br/>姓名:".$row['name'].
                "<br/>性別:".$row['sex'].
                "<br/>身分證字號:".$row['id_number'].
                "<br/>出生年:".$row['birth_year'].
                "<br/>出生月: ".$row['birth_month'].
                "<br/>出生日: ".$row['birthday'].
                "<br/>Ma i l 帳號:".$row['mail'].
                "<br/>聯絡電話:".$row['tel'].
                "<br/>".
                "<br/>"
			 );
       }
    ?>