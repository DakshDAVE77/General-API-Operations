<?php
include('connet.php');

// SQL query to retrieve data from another database
$sql = "SELECT * FROM upi1";

// Execute the query
$result = $conn->query($sql);


// Check if the query was successful
if ($result === false) {
    // Query failed
    $response = array('error' => 'Error: ' . $conn->error);
} else {
    // Fetch data from the result set                                                                                                                                                                                                                                                                                                                                                                              
    $data = array();
    while ($row = $result->fetch_assoc()) {
        // Add each row to the data array
        $data[] = $row;
    }

    // Return the data as JSON
    $response = array('data' => $data);
}

// Set the content type header
header('Content-Type: application/json');

// Output the JSON response
echo json_encode($response);
?>
