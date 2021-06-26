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


    <form method="POST" action="./mssql_update2.php">
	<label>原本學號：</label><input type="text" name="id1" >
        
    <?php
	
        $serverName="DESKTOP-933EBBG\SQLEXPRESS";
        $connectionInfo=array("Database"=>"test1", "UID"=>"sandy123", "PWD"=>"user0404", "CharacterSet"=>"UTF-8");
        $conn=sqlsrv_connect($serverName, $connectionInfo);
        $sql2="select * from family_profile";
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
            系所更改為：<input id1="id1" name="id1" type="text" /><br />
            家庭人數更改為：<input id1="family_size" name="family_size" type="text" /><br />
			就學人數學號：<input id1="number_of_students" name="number_of_students" type="text" /><br />
            工作人數更改為：<input id1="number_of_employees" name="number_of_employees" type="text" /><br />
			家長職業更改為：<input id1="parent_Career" name="parent_Career" type="text" /><br />
            收入情形更改為：<input id1="income_situation" name="income_situation" type="text" /><br />
			其他更改為：<input id1="other" name="other" type="text" /><br />
            <input id="submit" name="submit" type="submit" value="確定送出" />
        </form>