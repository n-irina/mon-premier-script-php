<?php
   $weapons = ['fists', 'whip', 'gun'];
   $opponentWeapon = $weapons[rand(0,2)];
   
   switch($opponentWeapon){
       case 'fists':
          $stevensonWeapon = 'gun';
          break;
       case 'whip':
          $stevensonWeapon = 'fists';
          break;
       case 'gun':
          $stevensonWeapon = 'whip';
          break;
    }       
    echo 'The oppponent weapon is "'.$opponentWeapon.'", so Stevenson chose the "'.$stevensonWeapon.'" to win';
?>