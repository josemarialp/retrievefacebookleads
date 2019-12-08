<?php

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'abc123'){
echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));
$leadgen_id = $input["entry"][0]["changes"][0]["value"]["leadgen_id"];

//Get the lead info
$lead = getLead($leadgen_id);//get lead info
//Create an email with the lead info
<html><body><h2>New lead</h2><blockquote>";
$mail.="Lead id: ".$leadgen_id."<br>";
foreach($lead as $attr=>$val) {
    $mail.=$attr.": ".$val."<br>";
}
$mail.="</blockquote></body></html>";
?>
