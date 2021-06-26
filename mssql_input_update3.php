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


    <form method="POST" action="./mssql_update3.php">
	<label>原本學號：</label><input type="text" name="id1" >
        
    <?php
	
        $serverName="DESKTOP-933EBBG\SQLEXPRESS";
        $connectionInfo=array("Database"=>"test1", "UID"=>"sandy123", "PWD"=>"user0404", "CharacterSet"=>"UTF-8");
        $conn=sqlsrv_connect($serverName, $connectionInfo);
        $sql2="select * from study_qualification";
        $result=sqlsrv_query($conn,$sql2)or die("sql error".sqlsrv_errors());
       
       /* while($row=sqlsrv_fetch_array($result)){
             echo ("<td>系所：").$row["department"].("</td>");
             echo ("<td>年級：").$row["grade"].("</td>");
             echo ("<td>學號：").$row["id1"].("</td>");
			 echo ("<td>姓名：").$row["Name"].("</td>");
			 echo ("<td>性別：").$row["sex"].("</td>");
             echo ("<td>身分證字號：").$row["id_number"].("</td>");
             echo ("<td>出生年：").$row["birth_year"].("</td>");
			 echo ("<td>出生月：").$row["birth_month"].("</td>");
			 echo ("<td>出生日：").$row["birthday"].("</td>");
             echo ("<td>Ma i l 帳號：").$row["mail"].("</td>");
			 echo ("<td>聯絡電話：").$row["tel"].("</td>");
			 
             echo ("</tr></table>");
             echo ("<hr />");
       }*/
    ?>  
            </select>     
            <br />
            原本學號：<input id1="id1" name="id1" type="text" /><br />
			
			<br />
			可工讀時間更改為：<Br>
			<Select name="time">
			<Option Value="白天工讀">白天工讀</Option>
			<Option Value="夜間工讀" Selected>夜間工讀</Option>
			<Option Value="進修部相關單位工讀">進修部相關單位工讀</Option>
			</Select><br />
			
			
			<br />
			擬工讀單位更改為：<Br>
			<Select name="unit">
			<Option Value="行政單位">行政單位</Option>
			<Option Value="圖書館" Selected>圖書館</Option>
			<Option Value="語言中心">語言中心</Option>
			<Option Value="電算中心">電算中心</Option>
			<Option Value="環安中心" Selected>環安中心</Option>
			<Option Value="均可">均可</Option>
			</Select><br />
			
			
			<br />
			工作志願及專長更改為：<Br>
			<Select name="expertise">
			<Option Value="文書工作">文書工作</Option>
			<Option Value="辦公室/研究室清潔維護" Selected>辦公室/研究室清潔維護</Option>
			<Option Value="校園清潔維護">校園清潔維護</Option>
			<Option Value="電腦">電腦</Option>
			<Option Value="美術海報設計" Selected>美術海報設計</Option>
			<Option Value="其他">均可</Option>
			</Select><br />
			
			
			<br />
			申請資格更改為：<Br>
			<Select name="application_form">
			<Option Value="經濟弱勢學生">經濟弱勢學生</Option>
			<Option Value="具有專長之學生" Selected>具有專長之學生</Option>
			</Select><br />
		
            <br />
            導師簽章更改為：<input id1="signature" name="signature" type="text" /><br />
            <input id="submit" name="submit" type="submit" value="確定送出" />
        </form>