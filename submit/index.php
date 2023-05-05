<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, PATCH, OPTIONS');
header('Content-Type: application/json');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve all submitted fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $message = $_POST["message"];
    
    // Process the submitted data as needed
    // In this example, we simply return the submitted data as a response
    
    $response = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'message' => $message,
        'submitted_at' => date('Y-m-d H:i:s')
    ];
    
    echo json_encode($response);
}
