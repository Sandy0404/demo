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
					header("Content-Type:text/html; charset=utf-8");
					$serverName=".";
					$connectionInfo=array("Database"=>"test1","UID"=>"sandy123","PWD"=>"user0404","CharacterSet" => "UTF-8");
					$conn=sqlsrv_connect($serverName,$connectionInfo);

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
					
                    $sql="INSERT INTO dbo.basic_information(department,grade,id1,name,sex,id_number,birth_year,birth_month,birthday,mail,tel) 
					VALUES('$department','$grade','$id1','$name','$sex','$id_number','$birth_year','$birth_month','$birthday','$mail','$tel')";

					$qury=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
					?> 
			</div>
	</body>
</html>