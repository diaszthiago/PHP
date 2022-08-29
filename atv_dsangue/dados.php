<?php
    
    $idade = $_POST["idade"];
    
    $peso = $_POST["peso"];

    
    if($idade >=70) {
        echo "Você não tem a idade permitida para doar"; 
    }elseif($idade <=15) {
        echo "Você não tem a idade permitida para doar";
    }else {
        echo  "Você tem a idade permitida para doar";  
    }if($peso >= 50) {
        echo "Você tem o peso permitido para doar";
    }else {
        echo "Você não tem o peso permitido para doar";
    }
    
?> 