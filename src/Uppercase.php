<?php

namespace JacMac\StringUppercase;

class Uppercase
{
    public function make(string $string): string
    {
        return strtoupper($string);
    }
}
