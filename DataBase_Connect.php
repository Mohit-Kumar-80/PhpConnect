<?php include 'db_con.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL Connection</title>
    <link rel="stylesheet" href="Form.css">

</head>
<body>

<h2>Insert User Data</h2>
<form action="Query.php" method="POST">
    <label >Name:*</label> <br>
    <input type="text" name="name" placeholder="Enter Name " required><br>
    <label >Phone:*</label><br>
    <input type="text" name="mobile" placeholder="Enter Mobile No. " required><br>
    <label >Email:*</label><br>
    <input type="email" name="email" placeholder="Enter Email " required><br>
    <input id="sbtn" type="submit" value="Submit">
</form>

<h2>Users List</h2>

<table>
    <tr ><th>Sr No.</th>
        <th>Name</th>
        <th>Mobile No.</th>
        <th>Email id</th>
    </tr>
    
<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "";
    // echo "<tr><th>{Na</th> <th>Moble No.</th> <th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td> <td> {$row['mobile']} </td> <td>{$row['email']}</td></tr><br>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}
$conn->close();
?>

</body>
</html>
