<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="cssfile/style.css">

    
    <div class="top_nav">      
        <a href="index.php">Home</a>
            <a href="Aboutus.php">About Us</a>  
        <a href="Feedback.php">Feedback</a>
        <a href="Services.php">Our services</a> 
        <a href="Premiumservices.php">Membership</a> 
    </div> 
        <div class="top_nav-right">
        <a href="createaccount.php">Create an account</a>
        <a href="signup.php">Sign in</a> 
    

        <a class="nav-link dropdown-toggle" href="createaccount.html" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            Type of account
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Organization account</a></li>
            <li><a class="dropdown-item" href="#">Personal account</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Other</a></li>
          </ul>
        </div> <br><br><br>

   <div class="ch">
    <h1>CREATE AN ACCOUNT</h1>
    </div>
</head>
<body>
  
   
 



    
    <!-- Form to create an account -->
    <div class="feedback">
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
     method="POST" autocomplete="off" class="feedback">
        <label for="fullname">Fullname:</label>
        <input type="text" name="fullname" placeholder="Fullname"><br><br>
        <label for="userpass">Password:</label>
        <input type="password" name="userpass" placeholder="password"><br><br>
        <label for="userpass">Re-enter password:</label>
        <input type="password" name="userpass" placeholder="password"><br><br>
        <label for="email">Email address</label>
        <input type="email" name="email_address" placeholder="Email Address"><br><br>
 

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

<input type="submit" value="Create Account" style="background-color: aqua;">

</div>
<img src="./images/los-santos-custom_gtao_887689_cover.jpg" alt="Background Image" style="position:fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;margin-left: 0px;">
<style>

    h1{
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: blue;
        margin-left: 500px;

       
    }
    h4{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color: red;
    }
    body{
        background-color:lightcyan;
    }
    img{
        margin-right: 200px;
        width: 700px;
        float: right;
    }
    
    
    @media screen and (max-width:500px)
{body,h4,h1,a,img {
    width:100%;
}
} 

   
   
</style>

<?php
    if(isset($_POST["create_account"])){
        $fullname=$_POST["fullname"];
        $password=$_POST["password"];
        $Reenter_password=$_POST["Re-enter Password"];
        $email=$_POST["email"];
    }

    $sql = "INSERT INTO newaccount (fullname, password,Reenter_password, email)
VALUES ('$fullname', '$password','$Reenter_password','$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>