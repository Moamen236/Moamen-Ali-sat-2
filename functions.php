<?php

function getPriceWithDiscount(){
    global $price;
    $price = 23232321;

    if($price < 1000){
        $discount = 0.10 * $price;
    }elseif($price >= 1000){
        $discount = 0.05 * $price;
    }
    return $discount;
}
$discount = getPriceWithDiscount();
echo "<h3>the price  = $price</h3>
<h3> The price after discount = $discount </h3><hr>";


function getNumMatches(){
    $words = [ 
        '1' => 'word-1' ,
        '2' => 'word-2' ,
        '3' => 'word-3' ,
        '4' => 'word-4' ];
        
    $value  = 'word-2';

    foreach( $words as $key => $word){
        if($value == $words[$key]){
            return $key;
        }
    }
}

$result = getNumMatches();
echo "<h3>$result</h3>";
?>