<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="cssfile/style.css">

        <title>About us</title>
    <link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
      <!-- Creating links for other pages -->

 <?php include_once("templates/nav.php");?>
   
    <h1>ABOUT US</h1><br><br>
 
</head>
<body>

    
 <img src="images/engine2.avif" alt=""> 
  <img src="images/engine3.jpg" alt="">   
<img src="images/engine 4.jpg" alt="">  
         
    <!-- About the company -->
    <div class="row">
        
    <p>
        <div class="content">
        The Los Santos Customs story begins back in 1962. The market for replacement tires was exploding, and independent tire dealers found themselves struggling to compete with major tire manufacturers' own company stores. Luckily, Los Santos Customs founding fathers, a handful of progressive independent tire dealers with a common belief that service matters, came together to form a tire-buying cooperative. In the following years, Los Santos Customs evolved into a full-fledged franchise as it continued to find innovative ways to benefit independent dealerships and their customers. And thus, The Team You Trust® was born.

Then in 1996, Los Santos Customs joined forces with TBC Corporation, one of North America’s largest marketers of automotive replacement tires.</div> <div class="sidebar"> Now with over 450 locations in 25 states, we can provide service you can trust for more people than ever before. And legend is still growing!


Our business model has been, and always will be, simple: earn customers’ trust by selling great products and always standing behind them. That’s why we back every  service with:   
One of the most comprehensive and affordable warranty protections available
Our 12-month/12,000-mile Nationwide Limited Repair Warranty, honored at over 460+ Los Santos Customs locations.

But we don’t stop there. Our Multi-Point inspection comes standard, when it’s anything but. Free of charge. Why? Because it’s the right thing to do. Because we believe you should take your vehicle to a place you can trust. Thats what makes us The Team You Trust.
</div>

    </p><br><br>
</div>
    <style>
         p{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin-top:300px;
                font-size:larger;
                
                
                
                
            }
            h1{
                font-family: 'Times New Roman', Times, serif;
                color: blue;
                margin-left: 400px;
                
            }
            img{
                width: 400px;
                float:left;
                margin-left: 10px;
                padding: 0px ;
                
            }
            body{
                background-color:azure;
            }
     
      .row:after{
    content: " ";
    display: block;
    clear: both;
}
.content{
    float: left;
    width: 60%;
    padding: 15px;
    margin-top: 0px;
    padding: 20px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: larger;
}
.sidebar{
    float: left;
    width: 33%;
    padding: 15px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: larger;
}
@media screen and (max-width:500px)
{.content,.side_bar,h1,a {
    width:100%;
}
}        
        
    </style>
      
      

      <div class="footer">
        Copyright &copy; Los Santos Customs- All rights reserved
</div>


</body>
</html>