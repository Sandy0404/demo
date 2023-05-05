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
<div class="detail_box clearfix">
                <div class="link_box">
                    <h3>修改工讀資格</h3>
                </br>
    <form class="detail_box_clearfix" method="POST" action="./mssql_update3.php">
	<label>原本學號：</label><input type="text" name="id1" >
    <br />
    <?php
        $serverName=".";
        $connectionInfo=array("Database"=>"test1", "UID"=>"sandy123", "PWD"=>"user0404", "CharacterSet"=>"UTF-8");
        $conn=sqlsrv_connect($serverName, $connectionInfo);
        $sql2="select * from study_qualification";
        $result=sqlsrv_query($conn,$sql2)or die("sql error".sqlsrv_errors());
       
    ?>  
            </select>     
            <br />
            原本學號：<input id1="id1" name="id1" type="text" /><br />
			
			<br />
			可工讀時間更改為：
			<Select name="time">
			<Option Value="白天工讀">白天工讀</Option>
			<Option Value="夜間工讀" Selected>夜間工讀</Option>
			<Option Value="進修部相關單位工讀">進修部相關單位工讀</Option>
			</Select><br />
			
			
			<br />
			擬工讀單位更改為：
			<Select name="unit">
			<Option Value="行政單位">行政單位</Option>
			<Option Value="圖書館" Selected>圖書館</Option>
			<Option Value="語言中心">語言中心</Option>
			<Option Value="電算中心">電算中心</Option>
			<Option Value="環安中心" Selected>環安中心</Option>
			<Option Value="均可">均可</Option>
			</Select><br />
			
			
			<br />
			工作志願及專長更改為：
			<Select name="expertise">
			<Option Value="文書工作">文書工作</Option>
			<Option Value="辦公室/研究室清潔維護" Selected>辦公室/研究室清潔維護</Option>
			<Option Value="校園清潔維護">校園清潔維護</Option>
			<Option Value="電腦">電腦</Option>
			<Option Value="美術海報設計" Selected>美術海報設計</Option>
			<Option Value="其他">均可</Option>
			</Select><br />
			
			
			<br />
			申請資格更改為：
			<Select name="application_form">
			<Option Value="經濟弱勢學生">經濟弱勢學生</Option>
			<Option Value="具有專長之學生" Selected>具有專長之學生</Option>
			</Select><br />
		
            <br />
            導師更改為：<input id1="signature" name="signature" type="text" /><br />
            <br />
            <input id="submit" name="submit" type="submit" value="確定送出" />
        </form>
    </div>