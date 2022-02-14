<!-- <div style\"color:".$kleur."; -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php
function kleur($kleur) {
    echo "<div style=\"color:".$kleur."; \">dit is de kleur $kleur</div>";
}
// de functie uit laten voeren:
kleur("red");
kleur("green");
kleur("blue");
kleur("purple");
?>

</body>
</html>

