<?php


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");


/// conexion with db

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','shop_3');
function Use__Api($contentType,$params){
    $response = [
        'value' => 0,
        'error' => 'All good',
        'data' => null,
    ];
    if($contentType ==='application/json'){
        $connection_DB = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
        if(!($connection_DB))
            die;
        $Email = $params['Email'];
        $sql_requet = "INSERT INTO subscribers (Email) VALUES ('$Email')";
        mysqli_query($connection_DB,$sql_requet);
        if($sql_requet){
            $response["value"] = 1;
        }
        else{
            $response["value"] = 0;
            $response['error'] = "we have error";
        }

    }
    echo json_encode($response);
}




$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
$params = json_decode(file_get_contents('php://input'),true);
Use__Api($contentType,$params);