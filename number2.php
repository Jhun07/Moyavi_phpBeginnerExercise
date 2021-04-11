<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 2 (best deal)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .container {
        margin-top: 3%;
        margin-left: 27%;
        margin-right: 30%;
        padding: 3%;
        border: 2px outset #FFB6C1;
        width: 40%;
        border-radius: 10% 10% 10% 10%;
        box-shadow: 10px 10px #FFB6C1;
        background-color: #FAF0E6;
    }

    h1 {
        text-align: center;
        font-size: 150%;
        text-shadow: 1.5px 1.5px gray;
    }

    * {
        font: bold large pink;



    }
    </style>
</head>

<body>
    <center>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="card mt-5">
                    <div class="card-header bg-light">
                        <h1>The best deal to purchase the item: </h1>
                    </div>
                    <div class="card-body bg-light">
                        <table>
                            <?php
   $quantity1 = 70;
   $quantity2 = 100;
   
   $price1 = 35;
   $price2 = 30;

   $deal1 = $price1 / $quantity1;
   $deal2 = $price2 / $quantity2;



 
   echo strtoupper("<u> First Deal:</u>   <br><br>");

   echo strtolower("QUAntITY  = <i style='color:blue; font: bold impact; '> $quantity1"."</i> <br>");
   echo strtolower("PriCe     = <i style='color:brown; font: bold impact; '> $price1"." </i> <br>");
   echo "<hr>";
   echo strtoupper(" <u>  Second Deal: </u> <br><br>");

   echo strtolower("QUanTITy  = <i style='color:blue; font: bold impact; '> $quantity2"."</i> <br>");
   echo strtolower("PrIcE     = <i style='color:brown; font: bold impact; '>$price2"."</i><br>");
   echo "<hr>";
   echo strtoupper("<u>  Best Deal to Purchase : </u> <br><br>");
   if($deal1 > $deal2){
       echo ucwords(" <i style='color:orange; font: bold impact; '> The second deal! </i>");
   }else{
       echo ucwords("<i style='color:orange; font: bold impact; '> The first deal! </i>");
   }
?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </center>
</body>

</html>