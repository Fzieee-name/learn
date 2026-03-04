<?php

$a = $_POST['a'];
$b = $_POST['b'];

if ($a > $b){
    echo $a. ' lebih besar';
} elseif ($a < $b){
    echo $b.' lebih besar';
} else{
    echo 'sama';
}

$c = $a + $b;
for ($i=0; $i < $c; $i++){
    echo '<br>  loop ke: '.$i. "<br>";
}
echo "<br>";
while ($c > 0){
    echo $c . " ";
    $c = $c - 1;
}