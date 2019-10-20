<?php
//header('Content-Type: application/json');
include_once '../../common/command/setup.php';

/* 
$data = $response->getResponse();  
$conn = $database->getConnection(); 
*/

$product_arr = array();
$sql = "SELECT * FROM account WHERE username='$data->username' AND password='$data->password'";
$ps = $conn->query($sql);
$result = $ps->fetch(PDO::FETCH_ASSOC);
echo json_encode(array("result" => $result));
