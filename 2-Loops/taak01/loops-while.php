<?php

$leeftijd = 0;
$stemmen = FALSE;

while(!$stemmen){

      
      if ($leeftijd < 18) {
            echo "Ik ben $leeftijd jaar, dus ik mag nog niet stemmen\n";
      } else {
            echo "Ik ben $leeftijd jaar, dus ik mag nog stemmen\n";
            $stemmen = TRUE;
      }

      $leeftijd = $leeftijd + 1;

}

?>

