<?php

declare(strict_types=1);

use Rosua\Leak\Leaker;

if (! function_exists('leak')) {
    function leak(object $object): Leaker
    {
        return new Leaker($object);
    }
}
