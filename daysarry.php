<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Variables,Array and Operators</h1>
<?php
    $day = array( "Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "The days of the week in English are:<br>";
    echo $day[0],", ", $day[1],", ", $day[2],", ", $day[3],", ", $day[4],", ", $day[5],", ", $day[6],".";

    $dayInFrench = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
    echo "<br><br>The days of the week in French are:<br>";
    echo $dayInFrench[0],", ", $dayInFrench[1],", ", $dayInFrench[2],", ", $dayInFrench[3],", ", $dayInFrench[4],", ", $dayInFrench[5],", ", $dayInFrench[6],".";

?>
</body>
</html>