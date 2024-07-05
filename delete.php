<?php
require 'includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['DelId'])) {
    $id = intval($_POST['DelId']);

    $sql = "DELETE FROM newaccount WHERE userID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    
    // Redirect back to view_account.php after deletion
    header("Location: view_account.php");
    exit();
} else {
    echo "Invalid request";
}
?>

