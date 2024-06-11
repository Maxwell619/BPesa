<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include_once("templates/nav.php");?>
    <h1>FEEDBACK</h1>
    
    
  

</head>
<body>
    
    <!-- Links to other webpages -->
  
<!-- Opening statement -->
    <p>Please provide feedback so that we could better our services you can also rate your experience and your opinion will be taken into consideration. </p>
<!-- Platform for user to enter feedback -->

    <form action=""autocomplete="off">
        <label for="Feedback" class="form-label">Feedback:</label><br>
        <div class="txtarea">
        <textarea name="" id="Feedback" rows="10" cols="100"></textarea>
    </div>  
       

        <style>
            h1{
                color: blue;
                margin-left: 500px;
                
            }
            p{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            label{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                color:blue;
            } 
            img{
                width: 300px;
            } 
            body{
                background-color: azure;
                padding: 20px;
            }
           
        </style>
        <!-- Letting the user rate their experience -->
         <h2>Rate your experience</h2>
         <label>Great experience <img src="images/happy-emoji-emoticon-showing-double-thumbs-up-like-2J0Y4NK.jpg" alt=""></label>
         <input type="radio" name="rate" value="1" id="Great experience"><br><br>
         <label>Good experience <img src="images/smile.jpeg" alt=""></label>
         <input type="radio" name="rate" value="2" id="Good experience"><br><br>
         <label>Regular experience <img src="images/regular.jpeg" alt=""></label>
         <input type="radio" name="rate" value="3" id="Regular experience"><br><br>
         <label>Poor experience <img src="images/sad emoji.webp" alt=""></label>
         <input type="radio" name="rate" value="3" id="Poor experience"><br><br>
         <!-- Adding submit button -->
         <input type="submit" value="Submit feedback">
         <link rel="stylesheet" href="cssfile/style.css">
        </body>
        </html>
        