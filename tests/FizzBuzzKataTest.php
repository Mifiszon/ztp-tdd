<?php

/**
 * FizzBuzzKata Test.
 */

namespace Test;

use App\FizzBuzzKata;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzzKata::class)]
class FizzBuzzKataTest extends TestCase
{
    #[DataProvider('dataProviderForFizzBuzzKata')]
    public function testFizzBuzzKata(int $number, string $expectedValue): void
    {
        //given
        $FizzBuzzKata = new FizzBuzzKata();

        //when
        $actualValue = $FizzBuzzKata->fizzBuzz($number);

        //then
        $this->assertEquals($expectedValue, $actualValue);
    }

    public static function dataProviderForFizzBuzzKata(): \Generator
    {
        yield 'value for number 1' =>[
          'number' => 1,
          'expectedValue' => '1',
        ];
        yield 'value for number 3' =>[
            'number' => 3,
            'expectedValue' => 'Fizz',
        ];
        yield 'value for number 5' =>[
            'number' => 5,
            'expectedValue' => 'Buzz',
        ];
        yield 'value for number 15' =>[
            'number' => 15,
            'expectedValue' => 'FizzBuzz',
        ];
        yield 'value for number 22' =>[
            'number' => 22,
            'expectedValue' => '22',
        ];
        yield 'value for number 25' =>[
            'number' => 25,
            'expectedValue' => 'Buzz',
        ];
        yield 'value for number 33' =>[
            'number' => 33,
            'expectedValue' => 'Fizz',
        ];
        yield 'value for number 45' =>[
            'number' => 45,
            'expectedValue' => 'FizzBuzz',
        ];
        yield 'value for number 50' =>[
            'number' => 50,
            'expectedValue' => 'Buzz',
        ];
        yield 'value for number 99' =>[
            'number' => 99,
            'expectedValue' => 'Fizz',
        ];
    }
}