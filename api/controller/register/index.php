<?php
//header('Content-Type: application/json');
include_once '../../common/command/setup.php';

/*
$data = $response->getResponse();
$conn = $database->getConnection();
 */

try {

    $sql = "INSERT INTO account (
        username,
        password,
        name
        )
    VALUES (?,?,?)";

    $ps = $conn->prepare($sql);
    $ps->execute([
        $data->username,
        $data->password,
        $data->name,
    ]);

    echo json_encode(array("result" => 'succeed'));

} catch (\PDOException $th) {

    echo json_encode(array("result" => 'error'));

}