<html>
<?php
header("Content-Type:text/html; charset=utf-8");


?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>客服專區</title>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
		<meta href="style.css" rel="stylesheet" http-equiv="content-type" content="text/css" charset="UTF-8"/>
    <h1>客服專區</h1>
    <?php
        $serverName=".";
        $connectionInfo=array("Database"=>"test", "UID"=>"sandy123", "PWD"=>"user0404", "CharacterSet"=>"UTF-8");
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
	   
       $sql="UPDATE dbo.basic_information SET department='$department',
	   grade='$grade',id1='$id1',Name='$Name',sex='$sex',
	   id_number='$id_number',birth_year='$birth_year' ,birth_month='$birth_month',
	   birthday='$birthday',mail='$mail',tel='$tel' WHERE id1='$id1'";
       $query=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
       
       echo "讀取dbo.basic_information的值：<br />";
       while($row=sqlsrv_fetch_array($result)){
             echo ("<table border=1px><tr>");
             echo ("<td>編號：").$row["department"].("</td>");
             echo ("<td>輸入值1：").$row["grade"].("</td>");
             echo ("<td>輸入值2：").$row["id1"].("</td>");
			 echo ("<td>輸入值2：").$row["Name"].("</td>");
			 echo ("<td>編號：").$row["sex"].("</td>");
             echo ("<td>輸入值1：").$row["id_number"].("</td>");
             echo ("<td>輸入值2：").$row["birth_year"].("</td>");
			 echo ("<td>輸入值2：").$row["birth_month"].("</td>");
			 echo ("<td>輸入值1：").$row["birthday"].("</td>");
             echo ("<td>輸入值2：").$row["mail"].("</td>");
			 echo ("<td>輸入值2：").$row["tel"].("</td>");
             echo ("</tr></table>");
             echo ("<hr />");
       }
    ?>