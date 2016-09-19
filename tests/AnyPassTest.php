<?php

namespace Prelude\Tests;

use function Prelude\{anyPass, partial, equals, has};

class AnyPassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldPass()
    {
        $gt = partial(function ($a, $b) { return $a > $b; });
        $gte = anyPass([$gt(3), equals(3)]);

        $this->assertTrue($gte(2));
        $this->assertTrue($gte(3));
        $this->assertFalse($gte(4));

        $has = anyPass([has('user'), has('mobile')]);
        $this->assertTrue($has(['user' => '']));
        $this->assertTrue($has(['mobile' => '']));
        $this->assertFalse($has([]));
    }
}
