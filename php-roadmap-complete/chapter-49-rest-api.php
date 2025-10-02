<?php
// Chapter 49: Simple REST API (JSON response)
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if($method === 'GET'){
    echo json_encode(['status'=>'ok','msg'=>'This is GET']);
} elseif($method === 'POST'){
    $payload = json_decode(file_get_contents('php://input'), true);
    echo json_encode(['status'=>'ok','received'=>$payload]);
}
?>