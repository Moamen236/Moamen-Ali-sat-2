<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    
    $errors = [];
    if(empty($username)){
        $errors[] = "username is requird";
    }elseif(! is_string($username)){
        $errors[] = "username must be string";
    }elseif(strlen($username) < 5 && strlen($username) > 255 ){
        $errors[] = "username must in range ( 5-255 )";
    }

    if(! is_string($description)){
        $errors[] = "Description must be string";
    }

    if(empty($price)){
        $errors[] = "price is requird";
    }elseif(! is_numeric($price)){
        $errors[] = "price must be number";
    }elseif(strlen($username) < 0 ){
        $errors[] = "username must greater than 0";
    }

    print_r($errors);
    
    function getPriceWithDiscount(){
        global $price;
    
        if($price < 1000){
            $discount = 0.10 * $price;
        }elseif($price >= 1000){
            $discount = 0.05 * $price;
        }
        return $discount;
    }
    $discount = getPriceWithDiscount();

    include "jumbotron.php";
}

?>