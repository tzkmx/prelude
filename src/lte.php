<?php

declare(strict_types=1);

namespace Prelude;

const lte = __NAMESPACE__.'\lte';

function lte($x): \Closure
{
    return function ($y) use ($x): bool {
        return $x <= $y;
    };
}
