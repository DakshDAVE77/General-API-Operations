<?php

include('connet.php');

// Check if the form is submitted via DELETE
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "DELETE"){
    // Check if the required fields are present in the form data
    if(isset($_GET['id'])) {
        // Retrieve the ID of the record to be deleted
        $id=$_GET['id'];

        // Prepare SQL statement for deletion
        $sql = "DELETE FROM upi1 WHERE id = $id";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "ID field is missing.";
    }
} else {
    echo "Invalid request method";
}

// Close the database connection
if (isset($conn)) {
    $conn->close();
}
?>