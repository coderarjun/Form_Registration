<link rel="stylesheet" href="database.css">

<h1>Database</h1>


<table class="table">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Email</th>
<th>Number</th>
<th>Address</th>
<th>Country</th>
</tr>

<?php 
include 'db.php';
$sql = "SELECT * FROM names";

$result = mysqli_query($conn, $sql);

if ($result) {
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $gender = $row['gender'];
        $email = $row['email'];
        $number = $row['number'];
        $address = $row['address'];
        $country = $row['country'];
        

?>
<tr>
<td><?php echo $id  ?></td>
<td><?php echo $fname  ?></td>
<td><?php echo $lname  ?></td>
<td><?php echo $gender  ?></td>
<td><?php echo $email  ?></td>
<td><?php echo $number  ?></td>
<td><?php echo $address  ?></td>
<td><?php echo $country  ?></td>
</tr>

<?php 

    }
}

?>
</table>

