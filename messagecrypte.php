<?php
  function decrypt($msg){
    $keyNumber = strlen($msg)/2;
    $subChain ='';
    for ($i = 5; $i < $keyNumber+5; $i++){
      $subChain = $subChain.$msg[$i];
    }
    $newChain = str_replace('@#?',' ',$subChain);
    $result = strrev($newChain);
    echo $result.' ';
  }
  $msg1="0@sn9sirppa@#?ia'jgtvryko1";
  $msg2="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
  $msg3="aopi?sgnirts@#?sedhtg+p9l!";
  decrypt($msg1);
  decrypt($msg2);
  decrypt($msg3);
?>