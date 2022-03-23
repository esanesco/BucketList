<?php

namespace App\Services;

class Censurator
{
    public function purify(string $string)
    {


        $forbiddenWords = ['patate', 'merde', 'cul'];

        $stringPurified = str_replace($forbiddenWords, '*', $string);

        return $stringPurified;
    }


}

