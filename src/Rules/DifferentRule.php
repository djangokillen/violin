<?php

namespace Violin\Rules;

use Violin\Contracts\RuleContract;

class DifferentRule implements RuleContract
{
    public function run($value, $input, $args)
    {
        return $value !== $input[$args[0]];
    }

    public function error()
    {
        return '{field} must not match {arg}.';
    }
}