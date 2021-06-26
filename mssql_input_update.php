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








    <form method="POST" action="./mssql_update.php">
	<label>原本學號：</label><input type="text" name="id1" >
        
    <?php
	
        $serverName="DESKTOP-933EBBG\SQLEXPRESS";
        $connectionInfo=array("Database"=>"test1", "UID"=>"sandy123", "PWD"=>"user0404", "CharacterSet"=>"UTF-8");
        $conn=sqlsrv_connect($serverName, $connectionInfo);
        $sql2="select * from basic_information";
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
            系所更改為：<input id1="department" name="department" type="text" /><br />
            年級更改為：<input id1="grade" name="grade" type="text" /><br />
			原本學號：<input id1="idea1" name="idea1" type="text" /><br />
            姓名更改為：<input id1="name" name="name" type="text" /><br />
			性別更改為：<input id1="sex" name="sex" type="text" /><br />
            身分證字號更改為：<input id1="id_number" name="id_number" type="text" /><br />
			出生年更改為：<input id1="birth_year" name="birth_year" type="text" /><br />
            出生月更改為：<input id1="birth_month" name="birth_month" type="text" /><br />
			出生日更改為：<input id1="birthday" name="birthday" type="text" /><br />
            Ma i l 帳號更改為：<input id1="mail" name="mail" type="text" /><br />
			聯絡電話更改為：<input id1="tel" name="tel" type="text" /><br />
            <input id="submit" name="submit" type="submit" value="確定送出" />
        </form>