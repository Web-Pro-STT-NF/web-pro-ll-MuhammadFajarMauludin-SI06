<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Meyrvan", "Irfan", "Ubay", "Ajay"];
    array_pop($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>