<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 5 (integer) </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.container {
    margin-top: 0%;
    margin-left: 27%;
    margin-right: 30%;
    padding: 2%;
    border: 2px outset #d63384;
    width: 50%;
    border-radius: 10% 10% 10% 10%;
    box-shadow: 10px 10px #d63384;
}

h1 {
    text-align: center;
    text-shadow: 1.5px 1.5px gray;
}
</style>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="card mt-5">
                <div class="card-header bg-light">
                    <h1>Recurring Elements with listed Integers</h1>
                </div>
                <div class="card-body bg-light">
                    <table>
                        <?php
    
    $listofNumbers = array(100,99,10,8,8,20,41,20,10,1,1);
   
    echo "<b style='color:brown; font: bold impact;'> List of Numbers :   </b>";
                    foreach($listofNumbers as $value){
                        echo ( $value ." , ");  
                    }
    echo "<hr style='border: 1px inset #d63384; '>";

   
    
    echo " <b style='color:brown; font: bold impact;'>Sorted Original Array with indexes :   </b>";
    sort($listofNumbers);
    print_r($listofNumbers);
    

    echo "<hr style='border: 1px inset #d63384; '>";
    echo " <b style='color:brown; font: bold impact;'> Clean Sorted Original Array:   </b>";
                    foreach($listofNumbers as $value){
                        echo ($value ." , ");  
                    }
    
    $uniqueArray = array_unique($listofNumbers);
    echo "<hr style='border: 1px inset #d63384; '>";
    echo "<h1 style='font-size: 150%;'>Unique Values</h1>";
    echo "<hr style='border: 1px inset #d63384; '>";

    echo " <b style='color:brown; font: bold impact;'>Sorted Unique Array with indexes :   </b>";
    sort($uniqueArray);
    print_r(array_unique($listofNumbers));
    echo "<hr style='border: 1px inset #d63384; '>";

    echo "<b style='color:brown; font: bold impact;'> Clean Sorted Unique Array :   </b>";
                    foreach($uniqueArray as $value){
                        echo ($value ." , ");  
                    }
?>
                    </table>

                </div>
            </div>
        </div>
    </div>





</body>

</html>