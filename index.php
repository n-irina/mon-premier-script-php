<?php
   function writeSecretSentence(string $param1, string $param2):string{
      $result = $param1.' s\'incline face à '.$param2;
      return $result;
   }  
   $animals = ['le lion', 'la tortue', 'l\'âne'];
   $things = ['la lune', 'le feu', 'le soleil'];
   foreach($animals as $animal){
      foreach($things as $thing){
         echo writeSecretSentence($animal, $thing).'<br>';
      }
   }
?>