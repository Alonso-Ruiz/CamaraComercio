<?php
// send_data.php

// Generar un dato (hora actual o número aleatorio)
$data = date('H:i:s'); // Hora actual, puedes cambiar esto a un número aleatorio si prefieres

// URL del servidor de WebSocket (ajusta el puerto si es necesario)
$wsUrl = 'http://localhost:3000';

// Usar cURL para enviar datos al servidor WebSocket
$ch = curl_init($wsUrl . '/send_data');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('data' => $data)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$response = curl_exec($ch);
curl_close($ch);

echo 'Hora Actual: ' . $data;
?>
