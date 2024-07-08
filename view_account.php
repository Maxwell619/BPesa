<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="cssfile/style.css">
<div class="top_nav">
<?php include_once("templates/nav.php");?>

<div class="tble">
<?php
require 'includes/db_connect.php';

$sql = "SELECT * FROM newaccount"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style=width:100%";
    echo "<tr><th>UserID</th><th>Full Name</th><th>Password</th><th>Re-enter Password</th><th>Email Address</th><th>Actions</th></tr>";

    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['userID']) . "</td>"; 
        echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";  
        echo "<td>" . str_repeat('*', strlen($row['password'])) . "</td>";
        echo "<td>" . str_repeat('*', strlen($row['Reenter_password'])) . "</td>";
        
        echo "<td>" . htmlspecialchars($row['email_address']) . "</td>";
        echo "<td>";
        echo "<form action='editnewaccount.php' method='get' style='display:inline;'>";
        echo "<input type='hidden' name='userID' value='" . htmlspecialchars($row['userID']) . "'>";
        echo "<button type='submit' class='btn btn-success' name='edit'>Edit</button>";
        echo "</form>";
        echo "<form action='delete.php' method='post' style='display:inline' onclick=\"return confirm('Are you sure you want to delete this account?')\">";

        echo "<input type='hidden' name='DelId' value='" . htmlspecialchars($row['userID']) . "'>";
        echo "<button type='submit' class='btn btn-danger' name='delete'>Delete</button>";
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
