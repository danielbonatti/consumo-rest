<?php

function fazerPedidoCurl($url, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);

    if ($response === false) {
        echo curl_error($ch);
    } else {
        echo $response;
    }

    curl_close($ch);
}

$url = $argv[1];
$data = $argv[2];

fazerPedidoCurl($url, $data);

?>
