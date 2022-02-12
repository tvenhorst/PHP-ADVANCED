<!DOCTYPE html>
<body>
    
<form class= "Form" method="get" action="LF2.php">


<select id="naam" name="naam">

<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
foreach ($klassen as $klas){
    if($Klas = $klas){
        echo "<option value='$Klas' selected>$klas</option>";
    }
    else{
        echo "<option value='$Klas'>$klas</option>";
    }
}

?>
</select> <br><br>

<button class= "button">send</button>
</form>

</body>
</html>