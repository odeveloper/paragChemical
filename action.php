<?php
// define variables and set to empty values
$name = $email = $phone = $address = $city = $zipcode = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $zipcode = test_input($_POST["zipcode"]);
  $country = test_input($_POST["country"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<body>

Welcome <?php echo $name; ?><br>
Your email address is: <?php echo $email; ?><br>
phone number is: <?php echo $phone; ?><br>
Address is: <?php echo $address; ?><br>
City is: <?php echo $city; ?><br>
ZIP code is: <?php echo $zipcode; ?><br>
country is: <?php echo $country; ?>


</body>
</html>