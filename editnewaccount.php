<?php 
    require_once("includes/db_connect.php");


$UserID = $_GET["UserID"];

$spot_message = "SELECT * FROM newaccount WHERE UserID = '$UserID' LIMIT 1";
$spot_mes_res = $conn->query($spot_message);

$spot_mes_row = $spot_mes_res->fetch_assoc();

if(isset($_POST["update_account"])){
    $fullname = mysqli_real_escape_string($conn, addslashes($_POST["fullname"]));
    $password = mysqli_real_escape_string($conn, addslashes($_POST["password"]));
    $Reenter_password = mysqli_real_escape_string($conn, addslashes($_POST["Reenter_password"]));
    $email_address = mysqli_real_escape_string($conn, ($_POST["email_address"]));


    $update_message = "UPDATE newaccount SET fullname='$fullname', password='$password', Reenter_password='$Reenter_password', email_address='$email_address' WHERE UserID='$UserID' LIMIT 1";

    if ($conn->query($update_account) === TRUE) {
    header("Location: view_account.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
    
?>
 <div class="ch">
        <h1>CREATE AN ACCOUNT</h1>
    </div>
</head>
<body>
    <!-- Form to create an account -->
    <div class="feedback">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off" class="feedback">
          
            <label for="fullname">Fullname:</label>
            <input type="text" name="fullname" placeholder="Fullname" required value="<?php print $spot_mes_row["fullname"];?>"><br><br>
            <label for="userpass">Password:</label>
            <input type="password" name="password" placeholder="password" required value="<?php print $spot_mes_row["password"];?>"><br><br>
            <label for="userpass">Re-enter password:</label>
            <input type="password" name="Reenter_password" placeholder="password" required value="<?php print $spot_mes_row["Reenter_password"];?>"><br><br>
            <label for="email_address">Email address:</label>
            <input type="email" name="email_address" placeholder="Email Address" required value="<?php print $spot_mes_row["email_address"];?>"><br><br>
            <!-- Checking if the user has read terms and conditions -->
            <h4>Have you read the terms and conditions?</h4>
            <div>
                <label>Yes</label>
                <input type="radio" name="rate" value="1" id="Yes"><br><br>
            </div>
            <div>
                <label>No</label>
                <input type="radio" name="rate" value="2" id="No"><br><br>
            </div>
            <input type="submit" value="Update Account" style="background-color: aqua;" name="update_account">
            <input type="hidden" name="UserID" value="<?php print $spot_mes_row["UserID"];?>">
    </form>
        </form>