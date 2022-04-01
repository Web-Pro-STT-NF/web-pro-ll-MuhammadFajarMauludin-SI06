<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Meyrvan", "Irfan", "Ubay", "Ajay"];
    array_unshift($tims, "Joni", "Jono");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>