<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected option from the form
    $selectedOption = $_POST["pollOption"];

    // Store the vote data, for example, in a database
    // You need to implement your own database logic here

    // Return a response (this is just an example)
    echo json_encode(["status" => "success", "message" => "Vote submitted successfully"]);
} else {
    // Handle invalid requests
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
