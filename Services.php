<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
   
    <link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="cssfile/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include_once("templates/nav.php");?>
    <h1>Our Services</h1><br><br>
</head>
<body>
    <!-- Links of other pages -->
  

<!-- image -->
    <img src="images/46212975_m.jpg" alt=""><br><br>
    <!-- List of services offered -->
    <div class="services">
    <p>
        <li role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="EngineWorks" href="#EngineWorks"> Repair — Engine Works</li> <li  role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="AutoService" href="#AutoService"> Complete Auto Service Foreign</li><li  role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="Domestic" href="#Domestic"> Domestic </li><li  role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="Hybrids" href="#Hybrids"> Hybrids</li><li  role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="SmogCheck" href="#SmogCheck"> Smog Check</li><li  role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="EngineWorks" href="#SmogRepair"> Smog Repair</li><li  role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="Services" href="#Services"> Services:</li><div><li type="i"> Complete HVAC Service </li><li type="i"> Hybrids and Full Electric </li><li type="i"> Star Station Smog</li></div><br>
        
        <div class="collapse" id="Services">
            <div class="card card-body">
                <video width="100%" height="240" controls >
                    <source src="videos/Audi A4LMaintenance Service.mp4" type="video/mp4">
                
                  </video>
            </div>

          
          </div>

    </p><br>
</div>
    <style>
        img{
            float: right;
            width: 800px;
            margin-top: 0px;
        }
        h1{
            color: blue;
            margin-left: 500px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            margin-top: 10px;
        }
        body{
            background-color: azure;
        }
        li{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: larger;
            padding: 10px;
        }
        a{
            font-size: medium;
        }
        li:hover{
            background-color: aqua;
        }

 

    </style>
     <!--Creating a table  -->
   <div class="tble">
      <table>
    
        <table border="1px" style="border:solid #373737 1px; width: 100%;" >
        
        <tr>
            <th style="border: solid#373737 1px;">Service</th>
            <th style="border: solid#373737 1px;">Price</th>
           
        </tr>
            <tc>  
            <td style="border: solid#373737 1px;">Smog Repair</td>
            <td style="border: solid#373737 1px;">$250</td>   
        </tc> 
    </tr>
        <tc>
            <td style="border: solid#373737 1px;">Engine Works</td>
            <td style="border: solid#373737 1px;">$500</td>        
        </tc>
    </tr>
    <tc>  
    <td style="border: solid#373737 1px;">Services</td>
    <td style="border: solid#373737 1px;">$150</td>   
</tc> 
</tr>
</tr>
<tc>  
<td style="border: solid#373737 1px;">Smog Check </td>
<td style="border: solid#373737 1px;">$300</td>   
</tc> 
</tr>

</tr>
<tc>  
<td style="border: solid#373737 1px;">Domestics</td>
<td style="border: solid#373737 1px;">$200</td>   
</tc> 
</tr>  
</div> 
</table>


</body>

</html>