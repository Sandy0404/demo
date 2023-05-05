<?php
header("Content-type=text/json;charset=UTF-8");
    $serverName = "CR1-10"; 
	$connectionInfo = array( "Database"=>"test1", "UID"=>"sandy123", "PWD"=>"user0404","CharacterSet" => "UTF-8");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
    $resultset = sqlsrv_query($conn, "select expertise, count(expertise) as count from study_qualification group by expertise");
$data = array();
class User{
    public $expertise;
    public $count;
}

while($row = sqlsrv_fetch_array($resultset, SQLSRV_FETCH_ASSOC)) {
    $user = new User();
    $user->expertise = $row['expertise'];
    $user->count = $row['count'];
    $data[] = $user;
}
sqlsrv_close($conn);
echo json_encode($data);