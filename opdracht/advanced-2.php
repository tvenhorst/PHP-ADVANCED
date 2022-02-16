<!-- sommigen codes komen van w3schools maar ik heb er wel uitgebreid naar gekeken en snap wat alles doet -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body style="background-color:<?php echo $_POST['achtergrond']; ?>;">
<!-- hier worden de tabel-border aangepast met de aangegeven cijfers die je invoert in de box de padding veranderd hier ook -->

    <?php
        function row($key, $value){

        echo "<td style='border: ".$_POST['tabel-border']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$key</td>";
        echo "<td style='border: ".$_POST['tabel-border']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$value</td>";
     
    }
// dit is de informatie die de maakrij gebruikt om de informatie in de tabel te zetten
    //$infor = ['red' , 'blue' , 'green' , 'black' , 'brown'];
    //$infor[0];
    //["naam"=>"thomas", "woonplaats"=>"Amstelveen", "leeftijd"=>"17", "klas"=>"1B"]

       $infor = array("naam"=>"thomas", "woonplaats"=>"Amstelveen", "leeftijd"=>"17", "klas"=>"1B");
       //$infor["naam"];



    echo "<table style='border:  ".$_POST['tabel-border']."px solid' width='300' cellspacing='0'>";


     foreach($infor as $key =>$value){  
        row($key, $value);
     }

    echo "</table>"

?>

</body>
</html>