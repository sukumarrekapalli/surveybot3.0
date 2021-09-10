<?php
// $_POST['names[]']
// foreach($_POST['names'] as $key=>$val){


// }
$array['1'] = 96;
$array['2'] = 76;
$array['3'] = 73;
$array['4'] = 76;
$array['5'] = 72;

$marks;
$i = 0;
foreach($array as $key=>$val){
    echo $key;
    echo $val."<br>";
     $marks[$i] = $val; 
    $i++;
}
print_r($marks);

for($i=0; $i<sizeof($marks); $i++){
     //$maxnow = 0;
    
  for($j=$i+1; $j<sizeof($marks)-1; $j++){

  
     if($marks[$i]<$marks[$j])
     {
         $buff=$marks[$j];
         $marks[$j] = $marks[$i];
         $marks[$i] = $buff;
     }

   

    }
    //  if($marks[$i]> $){
    //      $maxnow = $marks[$i];
    //      $marks[$j] = $maxnow;
    //      $j++;
    //  }

}

echo "<br> sorted marks";

 
print_r($marks);

foreach($array as $key=>$val){


    for($i=0;$i<sizeof($marks);$i++){
                

    }

}