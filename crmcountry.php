<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>crm country table</title>
<style>
    .btn-place{text-align:center;margin-bottom: 50PX;}
    .country-btn{border: none; padding: 5px 10px;background:#bbb;border-radius: 2px;font: normal 500 16px/100% "sansarif";margin: 50px 0 ;
    color:#fff;  }
.container{max-width: 800px;}
.row{display: flex; flex-direction: row;justify-content: center;}
.row div{flex: 1;border-radius: 1px;border: 1px solid #3337;height: auto;text-align: center;}

</style>
<SCript>
    // function alertfun(){
    //   alert("
    //   <form action="add.php">
    // <div>
    //     <label for="iso">iso code</label>
    //     <input name="iso" type="text" id="iso">
    // </div>
    // <div>
    //     <label for="nicename">country code</label>
    //     <input name="nicename" type="text" id="nicename">
    // </div>
    // <div>
    //     <label for="iso3">iso code(3)</label>
    //     <input name="iso3" type="text" id="iso3">
    // </div>
    // <div>
    //     <label for="phonecode">country code</label>
    //     <input name="phonecode" type="text" id="phonecode">
    // </div>
    // <div>
    //     <label for="enb">edit</label>
    //     <input name="enb" type="text" id="enb">
    // </div>

    // </form>
    //   ")
    // }
</SCript>
</head>

<body>
 
<h1> the table for the country code</h1>
<div class="btn-place">
<a class="country-btn" href="./add.php" onclick="adfadlertfun();">add your country</a>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ink_crm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Determine the current page number
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$records_per_page = 10; // Number of records to display per page

// Calculate the offset based on the current page
$offset = ($current_page - 1) * $records_per_page;

// Query to retrieve data with pagination
$sql = "SELECT * FROM country LIMIT $offset, $records_per_page";
$result = $conn->query($sql);

// Display the data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
$result1=mysqli_query($conn,$sql);
?>
<div class="container">
    <div class="row">
        <div><?php echo($row["iso"]); ?></div>
        <div><?php echo($row["nicename"]); ?></div>
        <div><?php echo($row["iso3"]); ?></div>
        <div><?php echo($row["phonecode"]); ?></div>
        <div><?php echo($row["enb"]); ?></div>
    </div>
</div>

<?php
  }
} else {
  echo "0 results";
}
// Generate pagination links
$sql = "SELECT COUNT(*) AS total_records FROM country";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_records = $row["total_records"];
$total_pages = ceil($total_records / $records_per_page);

for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='crmcountry.php?page=$i'>$i</a> ";
}

mysqli_close($conn);
?>
<h1>&nbsp;</h1>
</body>
</html>
