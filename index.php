<?php
$servername = "localhost";
$username = "admin";
$password = "Ingrin_52";
$dbname = "offers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connected failed";
} 
echo "Connected successfully";

//display offers
$sql = "SELECT * FROM `offers`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>OfferID: " . $row["OfferID"]. " - VendorID: " . $row["VendorID"]. " Redeem Code:" . $row["RedeemCode"]. "</h1>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
