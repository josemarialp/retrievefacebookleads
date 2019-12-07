<?php

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'abc123'){
echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));
?>
