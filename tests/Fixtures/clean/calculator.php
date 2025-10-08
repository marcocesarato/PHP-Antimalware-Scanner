<?php

/**
 * Clean PHP file for testing.
 * This file contains no malicious code.
 */
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }
}

$calc = new Calculator();
echo $calc->add(5, 3);
