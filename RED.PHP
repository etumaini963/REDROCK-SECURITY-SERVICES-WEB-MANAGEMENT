 



<?php
 

// Assuming you have already established a connection to the database
// Replace 'your_database_name' with your actual database name
 $con =mysqli_connect('localhost','root','','redrock security database');

// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert the form data into the database
$sql = "INSERT INTO client request  sign up ('name', 'phone', 'email', 'message') VALUES ('$name', '$phone', '$email', '$message')";

// Execute the query
if (mysqli_query($connection, $sql)) {
  echo "Form submitted successfully!";
} else {
  echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','redrock_security');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_client` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>

