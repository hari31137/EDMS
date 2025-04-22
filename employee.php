<?php
// Database configuration
$host = 'localhost'; // Database host
$db = 'employee_db'; // Database name
$user = 'root'; // Database username
$pass = ''; // Database password

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $EmployeeId = $_POST['Employee Id'];
    $Fullname = $_POST['Fullname'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO employees (emp_id, name, email, position, department, salary) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssd", $empId, $name, $email, $position, $department, $salary);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New employee added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>