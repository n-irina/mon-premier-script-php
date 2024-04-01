<?php
   $steveBooks=[
     'L\'île au trésor'=>'1883',
     'Heather Ale'=>'1890',
     'Le voleur de cadavre'=>'1877'
   ];
   asort($steveBooks);
   foreach($steveBooks as $date=>$book){
      echo '> '.$book.' - ';
      echo $date.'<br>';
   }
?>