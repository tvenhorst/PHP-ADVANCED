<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

  <?php
echo $_POST['voornaam'] . "<br>";

echo $_POST['achternaam'] . "<br>";

echo $_POST['klas'] . "<br>";

echo $_POST['leeftijd'] . "<br>";

echo $_POST['adres'] . "<br>";

echo $_POST['plaatsnaam'] . "<br>";

echo $_POST['favorietemuziekband'] . "<br>";

echo $_POST['gender'] . "<br>";

echo $_POST['kleur'];

if( $_POST['kleur'] ) {

    echo '<body style="background-color:'.$_POST['kleur'].'">';
   }
?>

</body>
</html>
