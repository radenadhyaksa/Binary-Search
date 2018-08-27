
<?php

function binary_search(Array $number, $value){

    if (count($number) === 0) return false;

    $x = 0;
    $y = count($number)-1;

    while ($x <= $y) {
    $m = floor(($x + $y) / 2);

    if ($number[$m] == $value) {
        return true;

    } if ($value < $number[$m]){
        $y = $m - 1;
    } else {
        $x = $m + 1;
    }

}

return false;

}

$number = array(1, 2, 3, 4, 5);
$input = 6;

if(binary_search($number, $input) == true) {
    echo $input. " = Binary search is TRUE";
} else {
    echo $input. " = Doesnt exist";
}

?>