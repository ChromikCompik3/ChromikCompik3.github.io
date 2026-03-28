<?php
header('Content-Type: application/json');

$valid_key = 'cracked_by_arctyx';
$input_key = isset($_POST['key']) ? $_POST['key'] : '';

if ($input_key === $valid_key) {
    $expired_date = date('Y-m-d', strtotime('+1488 days'));
    $response = [
        'status'   => 'success',
        'msg'      => '@arctyxso2',
        'username' => '@arctyxso2',
        'avatar'   => '',
        'expired'  => $expired_date
    ];
} else {
    $response = [
        'status'   => 'error',
        'msg'      => '@arctyxso2',
        'username' => '@arctyxso2',
        'avatar'   => '',
        'expired'  => date('Y-m-d', strtotime('+1488 days'))
    ];
}

echo json_encode($response);
?>