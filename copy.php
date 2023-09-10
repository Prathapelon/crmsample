<?php
// Your database connection code goes here
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Determine the current page number
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$records_per_page = 10; // Number of records to display per page

// Calculate the offset based on the current page
$offset = ($current_page - 1) * $records_per_page;

// Query to retrieve data with pagination
$sql = "SELECT * FROM your_table_name LIMIT $offset, $records_per_page";
$result = $conn->query($sql);

// Display the data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Output the data as needed
        echo "ID: " . $row["id"] . " Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No records found.";
}

// Generate pagination links
$sql = "SELECT COUNT(*) AS total_records FROM your_table_name";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_records = $row["total_records"];
$total_pages = ceil($total_records / $records_per_page);

for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='your_php_file.php?page=$i'>$i</a> ";
}

// Close the database connection
$conn->close();
?>
