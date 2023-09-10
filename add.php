
<form action="add.php">
    <div>
        <label for="iso">iso code</label>
        <input name="iso" type="text" id="iso">
    </div>
    <div>
        <label for="nicename">country code</label>
        <input name="nicename" type="text" id="nicename">
    </div>
    <div>
        <label for="iso3">iso code(3)</label>
        <input name="iso3" type="text" id="iso3">
    </div>
    <div>
        <label for="phonecode">country code</label>
        <input name="phonecode" type="text" id="phonecode">
    </div>
    <div>
        <label for="enb">edit</label>
        <input name="enb" type="text" id="enb">
    </div>
    <button type="submit" name="submit" >Submit</button>
    </form>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ink_crm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$iso=filter_input(INPUT_POST, 'iso');
$country=filter_input(INPUT_POST, 'nicename');
$iso3=filter_input(INPUT_POST, 'iso3');
$code=filter_input(INPUT_POST, 'phonecode');
$edit=filter_input(INPUT_POST, 'enb');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    $sql = "insert country (iso,nicename,iso3,phonecode,enb) values('$iso', '$country', '$iso3', '$code', '$edit') ";
$result = $conn->query($sql);

}
    
