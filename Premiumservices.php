<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="cssfile/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include_once("templates/nav.php");?>
    <h1>MEMBERSHIP</h1><br><br>
</head>

<body>
  
    <p>
        As Los Santos Customs we understand that at circumstances you may need garage services when you do not have sufficient funds. Worry no more for we have introduced an industry changing idea where you as the customer can buy a membership card that will offer you free services for the membership period you have subscribed.

    </p><br>
    <style>
        /* Editing paragraph */
        p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color:black;
            font-weight: bold;
            font-size: large;
            padding: 10px;
        }
        /* Editing title header */
        h1{
            color: blue;
            margin-left: 500px;
        }
        body{
            background-color: azure;
        }
        a{
            font-size: larger;
            padding: 20px;
        }
        h2{
            color:red;
            font-family: fantasy;
        }
    </style>
    <div class="joinus">
    <h2>JOIN US NOW</h2><br>
    <!-- Form to create an account -->
  <form action=""autocomplete="off">
    <label for="fullname">Fullname:</label>
    <input type="text" name="fullname"><br><br>
    <label for="userpass">Password:</label>
    <input type="password" name="userpass"><br><br>
    <label for="email">Email address</label>
    <input type="email" name="email_address"><br><br>
</div>
    <!-- Choosing payment method -->
    <div class="pmethod">
    <h2>Please select a payment method</h2><br>
    
    <label>Credit card</label>
    <input type="radio" name="rate" value="1" id="Credit card">
    <label>Paypal</label>
    <input type="radio" name="rate" value="2" id="Paypal">
    <label>M-Pesa</label>
    <input type="radio" name="rate" value="3" id="M-Pesa"><br><br>
</div>
<!-- Choosing a subscription -->
<div class="subscription">
    <h2>Select a subscription</h2><br>
    
    <label>80$ for 1 month</label>
    <input type="radio" name="rate" value="1" id="80 $ for 1 month"><br><br>

    <label>400$ for 6 months</label>
    <input type="radio" name="rate" value="2" id="400$ for 6 months"><br><br>

    <label>930$ for 1 year</label>
    <input type="radio" name="rate" value="3" id="930$ for 1 year"><br><br>
</div>


<!-- Adding a subscribe button -->
<div class="button">
    <input type="submit" value="Subscribe">
</div>


    

  </form>
 

  <img src="./images/join us.jpg" alt="Background Image" style="position:fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
  <style>
    img{
        color: azure;
    }
  </style>
</body>
</html>