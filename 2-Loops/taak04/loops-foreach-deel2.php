<!DOCTYPE html>

<html>

    <head>

        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
    <?php
    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo "<select>";
foreach ($klassen as $key => $value) {
    echo "<option value='$value'>$value</option>";
}
echo "</select>";


?>
    </body>
   

 