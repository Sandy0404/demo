<?php
header("Content-Type:text/html; charset=utf-8");


?>
<html>
<?php
header("Content-Type:text/html; charset=utf-8");


?>
<!-- saved from url=(0076)http://mepopedia.com/~web102-a/midterm/hw03_1015445024/graphic%20design.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>客服專區</title>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
    
    
    <h1>客服專區</h1>
    <?php
        $serverName="DESKTOP-933EBBG\SQLEXPRESS";
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
		/*$academic_performance1=$_POST['academic_performance1'];
		$academic_performance2=$_POST['academic_performance2'];
		$performance1=$_POST['performance1'];
		$performance2=$_POST['performance2'];*/
		/*$comment12=$_POST['id1'];
		$comment13=$_POST['family_size'];
		$comment14=$_POST['number_of_students'];
		$comment15=$_POST['number_of_employees'];
		$comment16=$_POST['parent_Career'];
		$comment17=$_POST['income_situation'];
		$comment18=$_POST['other'];
		$comment19=$_POST['id1'];
		$comment20=$_POST['time'];
		$comment21=$_POST['unit'];
		$comment22=$_POST['expertise'];
		$comment23=$_POST['application_form'];
		$comment24=$_POST['signature'];*/
        

       
	   
	    /*echo "系所:".$department;
		echo "<br />";
		echo"<br/>年級: ".$grade;
		echo "<br />";
		echo"<br/>學號:".$id1;
		echo "<br />";
		echo"<br/>姓名:".$Name;
		echo "<br />";
		echo"<br/>性別:".$sex;
		echo "<br />";
		echo"<br/>身分證字號:".$id_number;
		echo "<br />";
		echo"<br/>出生年:".$birth_year;
		echo "<br />";
		echo"<br/>出生月: ".$birth_month;
		echo "<br />";
		echo"<br/>出生日: ".$birthday;
		echo "<br />";
		echo"<br/>Ma i l 帳號:".$mail;
		echo "<br />";
		echo"<br/>聯絡電話:".$tel;
		echo "<br />";*/
		/*echo"<br/>第一學期學業成績:".$academic_performance1;
		echo "<br />";
		echo"<br/>第二學期學業成績: ".$academic_performance2;
		echo "<br />";
		echo"<br/>第一學期操行成績".$performance1;
		echo "<br />";
		echo"<br/>第二學期操行成績:".$performance2;
		echo "<br />";
		echo"<br/>家庭人數: ".$family_size;
		echo "<br />";
		echo"<br/>就學人數:".$number_of_students;
		echo "<br />";
		echo"<br/>工作人數:".$number_of_employees;
		echo "<br />";
		echo"<br/>家長職業:".$parent_Career;
		echo "<br />";
		echo"<br/>收入情形:".$income_situation;
		echo "<br />";
		echo"<br/>其他:".$other;
		echo "<br />";
		echo"<br/>可工讀時間：".$time;
		echo "<br />";
		echo"<br/>擬工讀單位：".$unit;
		echo "<br />";
		echo"<br/>工作志願及專長：".$expertise;
		echo "<br />";
		echo"<br/>申請資格：".$application_form;
		echo "<br />";
		echo"<br/>導師簽章:".$signature;
		echo"<br /><br />";*/
   
	   
	   
	   
	   
	   
	   
	   
       $sql="UPDATE dbo.basic_information SET department='$department',
	   grade='$grade',id1='$id1',Name='$Name',sex='$sex',
	   id_number='$id_number',birth_year='$birth_year' ,birth_month='$birth_month',
	   birthday='$birthday',mail='$mail',tel='$tel' WHERE id1='$id1'";
       $query=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
      
       /*$sql2="select * from dbo.basic_information";
       $result=sqlsrv_query($conn,$sql2)or die("sql error".sqlsrv_errors());*/
       
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