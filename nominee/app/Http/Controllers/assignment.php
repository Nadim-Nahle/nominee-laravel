<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class assignment extends Controller
{
    

    public function Palindrome($number){
        $original = 1441;
        $temp = $number; 
        $new = 0; 
        while (floor($temp)) { 
            $d = $temp % 10; 
            $new = $new * 10 + $d; 
            $temp = $temp/10; 
        } 
        if ($new == $number){ 
            return 1; 
        }
        else{
            return 0;
        }
    } 
     
    if (Palindrome($original)){ 
        echo "Palindrome"; 
    }
    else { 
    echo "Not a Palindrome"; 
    }
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
        $message = json_decode(file_get_contents('https://icanhazdadjoke.com/slack'), true)["attachments"][0]["text"];
        echo($message);
   }

   public function beer(){
       
    $message = (file_get_contents('https://api.punkapi.com/v2/beers'));
    echo($message);
    
    
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
