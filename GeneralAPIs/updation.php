<?php
// Include the file for database connection
include('connet.php');

// Check if the form is submitted via POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are present in the form data
    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone_no'])) {
        // Retrieve data from the form
        $id=$_GET['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_no = $_POST['phone_no'];

        // Prepare SQL statement
        $sql = "UPDATE upi1 SET first_name='$first_name', last_name='$last_name', phone_no='$phone_no' WHERE id=$id";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "One or more required fields are missing.";
    }
} else {
    echo "Invalid request method";
}

// Close the database connection
if (isset($conn)) {
    $conn->close();
}
?>
