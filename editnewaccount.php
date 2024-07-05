<link rel="stylesheet" href="cssfile/style.css">
<?php 
require_once("includes/db_connect.php");
 include_once("templates/nav.php");

if(isset($_GET["userID"])) {
    $userID = $_GET["userID"];

    // Fetch the account data
    $spot_account = "SELECT * FROM newaccount WHERE userID = '$userID' LIMIT 1";
    $spot_acc_res = $conn->query($spot_account);

    if ($spot_acc_res && $spot_acc_res->num_rows > 0) {
        $spot_acc_row = $spot_acc_res->fetch_assoc();
    } else {
        echo "Account not found";
        exit();
    }
}

if(isset($_POST["update_account"])){
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $Reenter_password = mysqli_real_escape_string($conn, $_POST["Reenter_password"]);
    $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $userID = mysqli_real_escape_string($conn, $_POST["userID"]);

    // Update the account data
    $update_account = "UPDATE newaccount SET fullname='$fullname', email_address='$email_address', password='$password', Reenter_password='$Reenter_password' WHERE userID='$userID' LIMIT 1";

    if ($conn->query($update_account) === TRUE) {
        // Redirect back to view_account.php after updating
        header("Location: view_account.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!-- HTML form for editing account data -->
<link rel="stylesheet" href="cssfile/style.css">
<div class="top_nav">
<?php include_once("templates/nav.php");?>

<div class="edit">

    <form action="editnewaccount.php" method="post">
        <input type="hidden" name="userID" value="<?php echo isset($spot_acc_row['userID']) ? htmlspecialchars($spot_acc_row['userID']) : ''; ?>">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" value="<?php echo isset($spot_acc_row['fullname']) ? htmlspecialchars($spot_acc_row['fullname']) : ''; ?>" required><br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo isset($spot_acc_row['password']) ? htmlspecialchars($spot_acc_row['password']) : ''; ?>" required><br><br>
        <label for="Reenter_password">Re-enter Password:</label>
        <input type="text" id="Reenter_password" name="Reenter_password" value="<?php echo isset($spot_acc_row['Reenter_password']) ? htmlspecialchars($spot_acc_row['Reenter_password']) : ''; ?>" required><br><br>
        <label for="email_address">Email Address:</label>
        <input type="email" id="email_address" name="email_address" value="<?php echo isset($spot_acc_row['email_address']) ? htmlspecialchars($spot_acc_row['email_address']) : ''; ?>" required><br><br>
        <button type="submit" name="update_account" style="background-color: aqua;" >Update</button>
    </form>
</div>
