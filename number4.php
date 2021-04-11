<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 4 (armstong or not)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
* {
    font: bold large pink;
}

.btn {
    width: 80%;
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
    margin-left: 26%;
}
</style>

<body>

    <div class="container mt-5 bg-light">
        <form method="post">
            <div class="mb-3">
                <label class="form-label ">
                    <h2> Enter a Number:</h2>
                </label>
                <input type="number" id="input" class="form-control" name="number" placeholder="Number (s) only">
            </div>
            <center> <input type="submit" class="btn btn-secondary" value="Submit"><br>
        </form>
        <br>
</body>
<?php  

//this if condition will validate the input field if there is entry or not
// if(isset($_SESSION['submit']))  
//  {   
if($_POST){
  $enterNumber = $_POST['number']; 
  $empty = null;
if($enterNumber==$empty){
    echo " <center> It is an empty field. Please do fill up! </center>";
  }
  
  
  $number = $enterNumber;  
  $returnResult  = 0;  
  
  //conditions that will assess if the entered number is an armstrong number or not
  while( $number != 0 )  
  {  
   $checkRemainder   = $number % 10; 
   $returnResult   = $returnResult + ( $checkRemainder * $checkRemainder * $checkRemainder ); 
   $number   = $number / 10; 
  }  
 
  //this will check the result and return a feedback
  if( $enterNumber == $returnResult && $enterNumber !=$empty)  
  {  
   echo "The entered number is <i style='color:blue; font: bold impact; '>$enterNumber </i> and <b style='color:brown; font: bold impact;'> an Armstrong Number. </b>";  
  }
  if ($enterNumber!=$returnResult)
  {  
   echo "The entered number is <i style='color:blue; font: bold impact; '>$enterNumber </i> and <b style='color:brown; font: bold impact;'>not an Armstrong Number. </b>" ;  
  }  
 }  

?>
</center>
</div>

</html>