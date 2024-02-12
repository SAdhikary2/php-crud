<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data from Database</title>
</head>
<body>

<?php
// Include your database connection file (connect.php)
include "connect.php";

// Fetch data from the database
$sql = "SELECT * FROM `cruud`";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $mobile = $row['mobile'];

        // Display data in the table
        echo "
        <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$password</td>
            <td>$mobile</td>
            <td>
            <button >Delete</button>
            <button>Update</button>
            </td>
            
        </tr>";
    }

    echo "
        </tbody>
    </table>";
} else {
    echo "Error fetching data from the database.";
}
?>

</body>
</html>
