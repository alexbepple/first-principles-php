<?php
class StringCreatorTest extends PHPUnit_Framework_TestCase {
    public function testCreatesOnlyWhitespace() {
        $result = createString();
        $resultWithWhitespaceRemoved = preg_replace('/\s*/', '', $result);
        $this->assertTrue(empty($resultWithWhitespaceRemoved));
    }
}

function createString() {
    return "  \n  \t  ";
}
