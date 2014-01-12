<?php
require_once 'class.phpmailer.php';

$_POST = array_map('trim', $_POST);

$error = false;

if (!isset($_POST['contact_name']) || empty($_POST['contact_name'])) {
    $error = true;
}

if (!isset($_POST['contact_email']) || empty($_POST['contact_email']) || !PHPMailer::ValidateAddress($_POST['contact_email'])) {
    $error = true;
}

if (!isset($_POST['contact_topic']) || empty($_POST['contact_topic'])) {
    $error = true;
}

if (!isset($_POST['contact_text']) || empty($_POST['contact_text'])) {
    $error = true;
}

if (!isset($_POST['contact_check']) || empty($_POST['contact_check']) || (int) $_POST['contact_check'] !== ((int) $_POST['contact_check_data'][0] * (int) $_POST['contact_check_data'][1])) {
    $error = true;
}

if ($error) {
    exit('nok');
}

$mail = new PHPMailer();

$mail->CharSet = 'UTF-8';

$mail->SetFrom($_POST['contact_email'], $_POST['contact_name']);


$mail->AddAddress('GraceJRaff@dayrep.com');


$mail->Subject = 'Message from site: ' . $_POST['contact_topic'];
$mail->Body = $_POST['contact_text'];

if (!$mail->Send()) {
    exit('nok');
}

exit('ok');