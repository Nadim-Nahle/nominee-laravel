<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class assignment extends Controller
{
    

    public function Palindrome(){
         $pal = 'hello';
    }

    // time controller
    public function time(){
        $date1 = "1732-04-15 18:00:00";
        $date2 = "2022-06-06 18:00:00";
        
        
        $date1_sec = strtotime($date1);
        $date2_sec = strtotime($date2);
        
        
        $difference = $date2_sec - $date1_sec;
        
        echo $difference; 
    
    }
    // text controller
    public function text(){
        $response = Http::get('https://icanhazdadjoke.com/slack');
        echo $response.'text';
   }

   public function beer(){
       
    $response = Http::get('https://api.punkapi.com/v2/beers');
    $new= json_encode($response);
    
    
}
   public function students(){
       
    $myArray = ['hadi','sara','nadim','charbel'];
    
    echo $myArray[0];
    echo ' ';
    echo $myArray[3];
    echo '<br>';
    echo $myArray[1];
    echo ' ';
    echo $myArray[2];
   
}
public function nominee(){
    $myArray = ['hadi','sara','nadim','charbel'];
       
    $randomNumber = rand(0,3);
    
    echo $myArray[$randomNumber];
   
}

    
}
