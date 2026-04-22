<?php

namespace Test;

use App\StringCalculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(StringCalculator::class)]
class StringCalculatorTest extends TestCase
{
    public function testCalculate()
    {
        //given
        $stringCalculator = new StringCalculator();

        //when
        $actualValue = $stringCalculator->add('1');

        //then
        $this->assertSame('1', $actualValue);

    }
}