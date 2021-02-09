<?php

/*
 * This file is part of the PHP-CLI package.
 *
 * (c) Kyle Luke <luke.kylew@gmail.com>
 *     <https://github.com/lukekyl>
 *
 * Licensed under MIT license.
 */
 namespace Test\FizzBuzz;
 use PHPUnit\Framework\TestCase;

 class Test extends TestCase
{

    public function test_isint(): void
    {
        $app = new App3;
        $actual = $app->stepOne('s');
        $this->assertEquals('Please use integer as input.', $actual);
    }
    
    public function test_30a(): void
    {
        $app = new App3;
        $actual = $app->stepOne(30);
        $this->assertEquals(30, count($actual));
    }
    
    public function test_30b(): void
    {
        $app = new App3;
        $actual = $app->stepOne(30);
        $this->assertFalse(array_key_exists(-1, $actual));
        $this->assertTrue(array_key_exists(0, $actual));
        $this->assertTrue(array_key_exists(29, $actual));
        $this->assertFalse(array_key_exists(30, $actual));
    }
    
    public function test_30c(): void
    {
        $app = new App3;
        $actual = $app->stepOne(30);
        $this->assertSame("1",    $actual[  1 - 1]);
        $this->assertSame("2",    $actual[  2 - 1]);
        $this->assertSame("lucky", $actual[  3 - 1]);
        $this->assertSame("4",    $actual[  4 - 1]);
        $this->assertSame("Buzz", $actual[  5 - 1]);
        $this->assertSame("Fizz", $actual[  6 - 1]);

        $this->assertSame("FizzBuzz", $actual[  15 - 1]);
        
        $this->assertSame("29",       $actual[ 29 - 1]);
        $this->assertSame("lucky", $actual[ 30 - 1]);
    }

}