<?php

class CounterTest extends PHPUnit_Framework_TestCase {

    public function testCanBeIncremented() {
        Counter::increment();
        $this->assertEquals(1, Counter::value());
    }

    public function testCanBeIncrementedMultipleTimes() {
        Counter::increment();
        $this->assertEquals(2, Counter::value());
    }
}

class Counter {
    private static $value = 0;

    public static function increment() {
        Counter::$value++;
    }

    public static function value() {
        return Counter::$value;
    }
}
