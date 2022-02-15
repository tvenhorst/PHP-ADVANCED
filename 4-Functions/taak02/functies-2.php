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
  function rekenUit($nummer1, $nummer2, $nummer3){
   $antwoord = $nummer1 + $nummer2 + $nummer3;
    return $antwoord;
}

   echo "Als ik de getallen 4,2 en 9 bij elkaar optel, is de uitkomst" . $answer1 = rekenUit(4, 2, 9). "<br>";
   echo "Als ik de getallen 1,6 en 7 bij elkaar optel, is de uitkomst" . $answer2 = rekenUit(1, 6, 7). "<br>";
   echo "Als ik de getallen 23,4 en 15 bij elkaar optel, is de uitkomst" . $answer3 = rekenUit(23, 4, 15). "<br>";
?>

</body>
</html>