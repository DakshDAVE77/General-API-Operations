<?php
include('connet.php');

// Check if the request method is POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form data is sent
    if (!empty($_POST)) {
        // Extract form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_no = $_POST['phone_no'];

        // Prepare and execute the SQL query to insert data into the database
        $sql = "INSERT INTO upi1 (id, first_name, last_name, phone_no) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql); 

        // Bind parameters
        $stmt->bind_param("isss", $id, $first_name, $last_name, $phone_no);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "No form data received.";
    }
}

// Close the database connection
$conn->close();
?>
