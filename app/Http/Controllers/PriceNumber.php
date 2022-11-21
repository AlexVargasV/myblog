<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceNumber extends Controller
{
    
    function index()
    {
        $name = "ALEXANDER VARGAS VILLAGOMEZ";
        // $xdxd = [1,2,2,3];
        // print_r($xdxd);
        // $number = '15342424';
        // $test = '1';
        // $lenght =strlen($test);
        // $shortarray = substr ( $number, 0, $lenght);
        // if($test == $shortarray)
        // {
        //     echo"siiiiiiiiiii";
        // }

                
        return view('port',compact('name'));
    }

    function calculate(Request $request)
    {
        
    }

}
