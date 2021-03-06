<?php

declare(strict_types=1);

namespace Prelude;

const prop = __NAMESPACE__.'\prop';

function prop($x): \Closure
{
    return function (array $xs) use ($x) {
        return $xs[$x] ?? null;
    };
}
