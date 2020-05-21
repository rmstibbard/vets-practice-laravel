<?php

namespace App;

class Cracker
{

    public function __construct($cypher) {
        $this->cypher = $cypher;
    }

    public function decrypt(string $str): string  {

        $cypherLetters = explode(" ", $this->cypher);

        foreach($cypherLetters as $index => $cypherLetter) {
            $solution["$cypherLetter"] = chr(97 + $index);  // 'a' is chr(97) - count up from there
        }

        $encryptedLetters = mb_str_split($str, 1);

        $result = "";

        foreach ($encryptedLetters as $encryptedLetter) {
            if ($encryptedLetter == " ") {
                $result .= " ";
            } else {
                $result .= $solution[$encryptedLetter];
            }
        }

        return $result;

    }

}