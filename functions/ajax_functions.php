<?php

function custom_send_message_ajax(){
    
    require_once(__DIR__ . '/../classes/SendMessage.php');

    $send = new SendMessage($_POST);
    $data = $send->get_output();

    echo $data;

    die;
    
}