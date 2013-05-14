<?php
class ObjectWithDateTest extends PHPUnit_Framework_TestCase {

    public function testKnowsWhenItWasCreated() {
        $object = new ObjectWithDate();
        $this->assertEquals(time(), $object->creationDate);
    }

    public function testKnowsWhenItWasCreated2() {
        $object = new ObjectWithDate();
        print_r($object->creationDate);
    }
}

class ObjectWithDate {
    function __construct() {
        $this->creationDate = time();
    }
}
