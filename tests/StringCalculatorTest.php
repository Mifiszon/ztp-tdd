<?php

namespace Test;

use App\StringCalculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(StringCalculator::class)]
class StringCalculatorTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function testCalculate1(string $input, int $expected): void
    {
        //given
        $stringCalculator = new StringCalculator();

        //when
        $actualValue = $stringCalculator->add($input);

        //then
        $this->assertSame($expected, $actualValue);
    }

    public static function dataProvider(): \Generator
    {
        yield 'sample number 1' =>[
            'input' => '1',
            'expected' => '1',
        ];
        yield 'sample number 2' =>[
            'input' => '2',
            'expected' => '2',
        ];
        yield 'sample number 0' =>[
            'input' => '0',
            'expected' => '0',
        ];
        yield 'sample number ""' =>[
            'input' => '',
            'expected' => '',
        ];
        yield 'sample number 66' =>[
            'input' => '66',
            'expected' => '66',
        ];
        yield 'sample number 1,2' =>[
            'input' => '1,2',
            'expected' => '3',
        ];
        yield 'sample number 0,2' =>[
            'input' => '0,2',
            'expected' => '2',
        ];
        yield 'sample number 1,0' =>[
            'input' => '1,0',
            'expected' => '1',
        ];
        yield 'sample number 1,0,2' =>[
            'input' => '1,0,2',
            'expected' => '3',
        ];
        yield 'sample number 1,2,3,4' =>[
            'input' => '1,2,3,4',
            'expected' => '10',
        ];
        yield 'sample number 1,\n,4' =>[
            'input' => '1,\n,4',
            'expected' => '5',
        ];
    }
}