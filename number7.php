<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 7 (convertion)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
    * {
        text-shadow: 0.5px 0.5px gray;



    }

    .container {
        margin-left: 27%;
        margin-right: 30%;
        padding: 5%;
        border: 2px outset black;
        width: 50%;
        border-radius: 10% 10% 10% 10%;
        box-shadow: 10px 10px #FFE4B5;
    }

    #input {
        background-color: #FFE4B5;
        color: black;
        border: 2px solid gray;
        border-radius: 4px;
        width: 80%;
        margin-left: 10%;

    }

    label {
        margin-left: 28%;
    }

    .btn {
        width: 80%;
    }
    </style>
</head>

<body>
    <div class="container mt-5 bg-light">
        <form method="post">
            <div class="mb-3">
                <label class="form-label ">
                    <h2> Enter Numbers:</h2>
                </label>
                <input type="number" id="input" class="form-control" name="number" placeholder="Number (s) only">
            </div>
            <center> <input type="submit" name='btn' class="btn btn-secondary" value="Submit"> <br>
        </form> <br>
</body>
<?php

if(isset($_POST['btn'])){
    $enterNumber = $_POST['number']; 
    getLength($enterNumber);
    $empty = null;
  if($enterNumber==$empty){
      echo " It is an empty field. Please do fill up!";
    }
}
function getLength($enterNumber){
    $str_length = strlen((string)$enterNumber);
    for ($ctr=0; $ctr <$str_length ; $ctr++) { 
        getNumIndex($enterNumber[$ctr]);
    }

}

function getNumIndex($digit){              
    switch($digit){
    
        case '0':
            echo "Zero ";
            break;
        case '1':
            echo "One ";
            break;
        case '2':
            echo "Two ";
            break;
        case '3':
            echo "Three ";
            break;
        case '4':
            echo "Four ";
            break;
        case '5':
            echo "Five ";
            break;
        case '6':
            echo "Six ";
            break;
        case '7':
            echo "Seven ";
            break;
        case '8':
            echo "Eight ";
            break;
        case '9':
            echo "Nine ";
            break;
                            
    }

}
?>
</center>

</html>