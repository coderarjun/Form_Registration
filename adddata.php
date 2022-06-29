<?php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$country = $_POST['country'];


include 'db.php';

$sql = "INSERT INTO names(fname, lname, gender, email, number, address, country)VALUES('$fname','$lname','$gender','$email','$number','$address','$country')";
//names = table name
// email & password = row of table names
$result = mysqli_query($conn, $sql);

if($result){
    header('Location:index.html');
}
?>