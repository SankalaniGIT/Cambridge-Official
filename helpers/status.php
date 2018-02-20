<?php
session_start();

$error = (isset($_GET['msgStatus']) ? $_GET['msgStatus'] : '');
$bgColor = (isset($_GET['bgIdentifier']) ? $_GET['bgIdentifier'] : 'transparent');

$specificId = uniqid();

if (!$error == '') {
    switch ($error) {
        case $_SESSION['lastUniqueId'] . 'sS' :
            $errorCode = 'Successfully Message Sent';
            break;
        case $_SESSION['lastUniqueId'] . 'uS' :
            $errorCode = 'Couldn\'t Send the Message';
            break;
        default:
            $error = '';
    }
}


//Assigning last UniqueId
$_SESSION['lastUniqueId'] = $specificId;