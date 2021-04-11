<!DOCTYPE html>
<html lang="en">

<head>
    <title>Number 3 (division table)</title>
    <style>
    * {
        font-weight: bold;

    }

    table {
        overflow: hidden;
        margin-top: 4%;
        margin-left: 25%;
        text-align: center;
        width: 50%;
        height: 20%;
        box-shadow: 10px 10px yellowgreen;

    }

    tr:hover {
        background-color: yellowgreen;
    }



    td,
    th {
        position: relative;
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 10px;




    }

    th:nth-child(odd) {
        background: yellowgreen;
        text-align: left;
    }

    th:nth-child(even) {
        background: yellowgreen;
        text-align: left;
    }

    tr:nth-child(11) {
        background: yellowgreen;
        text-align: left;
    }

    td:nth-child(11) {
        background: yellowgreen;
        text-align: left;
    }


    td:hover::after,
    th:hover::after {
        content: "";
        position: absolute;
        background-color: yellowgreen;
        left: 0;
        top: -5000px;
        height: 10000px;
        width: 100%;
        z-index: -1;
        |
    }

    h1 {
        text-align: center;
        text-shadow: 1.5px 1.5px gray;
    }
    </style>
</head>

<body>
    <br>
    <h1>Division table program using the for loop</h1>
    <table class="table table-dark table-striped">
        <?php
$numberStart = 1;
$numberEnd = 10;
  print("<tr>");
  print("<th> </th>");
  for ($count_1 = $numberStart;$count_1 <= $numberEnd;$count_1++)
    print("<th>$count_1</th>");
  print("</tr>");

  for ($count_1 = $numberStart;$count_1 <= $numberEnd;$count_1++){
    print("<tr><th>$count_1</th>");
    for ($count_2 = $numberStart;$count_2 <= $numberEnd;$count_2++){
        $result = $count_1 / $count_2;
        printf("<td>%.3f</td>",
               $result);  
      }
    print("</tr>\n");
  }
?>
    </table>

</body>

</html>