<?php

namespace App;

class FizzBuzz
{
    public function forNumber(int $i) : string {
        // if ($i % 15 === 0) {
        //     $result = "FizzBuzz";
        // } elseif ($i % 3 === 0) {
        //     $result = "Fizz";
        // } elseif ($i % 5 === 0) {
        //     $result = "Buzz";
        // } else {
        //     $result = "$i";
        // }
        $result = ($i % 3 === 0) ? "Fizz" : "";
        $result .= ($i % 5 === 0) ? "Buzz" : "";
        $result .= ($i % 7 === 0) ? "Rarr" : "";
        return ($result !== "") ? $result  : "$i";

    }



}