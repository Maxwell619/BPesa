<link rel="stylesheet" href="cssfile/style.css">
<div class="top_nav">
<?php include_once("templates/nav.php");?>

<div class="tble">
<?php
require 'includes/db_connect.php';

$sql = "SELECT * FROM newaccount"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Full Name</th><th>Password</th><th>Re-enter Password</th><th>Email Address</th><th>Actions</th></tr>";

    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";  
        echo "<td>" . htmlspecialchars($row['password']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Reenter_password']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email_address']) . "</td>";
        echo "<td>";
        echo "<form action='editnewaccount.php' method='get' style='display:inline;'>";
        echo "<input type='hidden' name='userID' value='" . htmlspecialchars($row['userID']) . "'>";
        echo "<button type='submit' name='edit'>Edit</button>";
        echo "</form>";
        echo "<form action='delete.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='DelId' value='" . htmlspecialchars($row['userID']) . "'>";
        echo "<button type='submit' name='delete'>Delete</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</div>
