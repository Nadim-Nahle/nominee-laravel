<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assignment extends Controller
{
    

    public function Palindrome(){
         $pal = 'hello';
    }

    public function time(){
        $date1 = "1732-04-15 18:00:00";
        $date2 = "2022-06-06 18:00:00";
        
        
        $date1_sec = strtotime($date1);
        $date2_sec = strtotime($date2);
        
        
        $difference = $date2_sec - $date1_sec;
        
        echo $difference; 
    
    }

    
}
