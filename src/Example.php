<?php

namespace Src;

class Example
{
    public function getNumber(int $number): string
    {
        if ($number === 0) {
            return 'zero';
        }
    }
}