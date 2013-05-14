<?php
class ObjectWithDateTest extends PHPUnit_Framework_TestCase {

    public function testKnowsWhenItWasCreated() {
        $object = new ObjectWithDate();
        $this->assertEquals(time(), $object->creationDate);
    }
}

class ObjectWithDate {
    function __construct() {
        $this->creationDate = time();
    }
}
