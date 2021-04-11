<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 1 (data)</title>
    <style>
    table,
    th,
    td {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 20px;


    }

    h1 {
        text-align: center;
        margin-top: 5%;
        text-shadow: 1.5px 1.5px gray;
    }

    th {
        background: yellowgreen;
        color: black;
        text-align: left;

    }

    table tr:nth-child(odd) {
        background-color: yellowgreen;
    }

    table tr:nth-child(even) {
        background-color: #FFFFFF;
    }

    table {
        margin-top: 5%;
        margin-left: 25%;
        text-align: center;
        width: 50%;
        height: 30%;
        box-shadow: 10px 10px yellowgreen;
    }

    th {
        font: 170% solid Impact black;
    }
    </style>
</head>

<body>
    <h1>Display the values via loops</h1>
    <?php




$str_data = file_get_contents("file.json");
$data = json_decode($str_data, true);
 

$tableData = "<table>";
 

$tableData .= "<tr><th><center>Name</center></th>";
$tableData .= "<th><center>Age</center></th>";
$tableData .= "<th><center>School</center></th></tr>";
 

for($content = 0; $content < sizeof($data["all"]); $content++)
{
$tableData .= "<tr>";
$tableData .= "<td>" . $data["all"][$content]["name"] . "</td>";
$tableData .= "<td>" . $data["all"][$content]["age"] . "</td>";
$tableData .= "<td>" . $data["all"][$content]["school"] . "</td>";
$tableData .= "</tr>";
}
 
$tableData .= "</table>";
 
echo $tableData;

    ?>
</body>
<script src="file.json"></script>

</html>