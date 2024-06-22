<link rel="stylesheet" href="cssfile/style.css">

<div class="tble">
<?php
require 'includes/db_connect.php';

$sql = "SELECT * FROM newaccount"; // Adjust your query to match your table structure

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    echo "<tr><th>fullname</th><th>password</th><th>Re-enter Password</th><th>email_address</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['fullname']) . "</td>"  ;
        echo "<td>" . htmlspecialchars($row['password']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Reenter_password']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email_address']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>
</div

