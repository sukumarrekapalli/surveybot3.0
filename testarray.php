<?php
$r1="that's nice";
function filtercode($responses){
    $array = str_split($responses);
    $i=0;
    foreach($array as $char){
    
     echo $char.'<br>';
      if($char=="'"){
          $array[$i]="\'";
       
      }
      $i++;
    }
  
    $final = implode("",$array);
    return $final;

  }

  $r1c = '"'.filtercode($r1).'"';

  echo $r1c;


  ?>