<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 6 (string) </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.container {
    margin-top: 1%;
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
                    <h1>Recurring Elements with listed Strings</h1>
                </div>
                <div class="card-body bg-light">
                    <table>
                        <?php
    
    $listofDiseases = array("ulcer","diabetes","insumia","migraine","insumia","heart attack","lung cancer","hiv","diabetes");
   
    echo "<b style='color:brown; font: bold impact;'> List of Diseases :   </b>";
                    foreach($listofDiseases as $value){
                        echo ucwords( $value ." - ");  
                    }
    echo "<hr style='border: 1px inset #d63384; '>";

   
    
    echo " <b style='color:brown; font: bold impact;'>Sorted Original Array with indexes :   </b>";
    sort($listofDiseases);
    print_r($listofDiseases);
    

    echo "<hr style='border: 1px inset #d63384; '>";
    echo " <b style='color:brown; font: bold impact;'> Clean Sorted Original Array:   </b>";
                    foreach($listofDiseases as $value){
                        echo  ucwords($value ." - ");  
                    }
    
    $uniqueArray = array_unique($listofDiseases);
    echo "<hr style='border: 1px inset #d63384; '>";
    echo "<h1 style='font-size: 150%;'>Unique Values</h1>";
    echo "<hr style='border: 1px inset #d63384; '>";

    echo " <b style='color:brown; font: bold impact;'>Sorted Unique Array with indexes :   </b>";
    sort($uniqueArray);
    print_r(array_unique($listofDiseases));
    echo "<hr style='border: 1px inset #d63384; '>";

    echo "<b style='color:brown; font: bold impact;'>Clean Sorted Unique Array :   </b>";
                    foreach($uniqueArray as $value){
                        echo  ucwords($value ." - ");  
                    }
?>
                    </table>

                </div>
            </div>
        </div>
    </div>





</body>

</html>