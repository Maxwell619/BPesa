<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include_once("templates/nav.php");?>
    <h1>SIGN-IN</h1>
   
</head>
<body>
    <img src="images/sign in.jpg" alt="">
    <!-- Creating a sign up form for users to login to their accounts -->
    <div class="signindetails">
    <form action=""autocomplete="off">
        <label for="fullname">Fullname:</label>
        <input type="text" name="fullname"><br> <br>
        <label for="userpass">Password:</label>
        <input type="password" name="userpass"><br><br>
    
        <style>
            h1{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                color: blue;
                margin-left: 500px;
                
            }
            body{
                background-color:azure; 
            }
            img{
                float: right;
                width: 500px;
                margin-right: 300px;
            }
        </style>
          <select name = "" id="">
            <option value="">--Select Account</option>
            <option value="">Personal Account</option>
            <option value="">Organization Account</option>
            <option value="">Other </option>
            
        </select><br><br>
        <!-- Adding sign-up button -->
        <input type="submit" value="Sign-Up" style="background-color: aqua;">
    </div>
        <link rel="stylesheet" href="cssfile/style.css">
</body>
</html>