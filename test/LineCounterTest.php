<?php

class LineCounterTest extends PHPUnit_Framework_TestCase {

    public function testCountsLines() {
        $contents = file_get_contents('http://agileinaflash.blogspot.com/feeds/posts/default');
        file_put_contents('rss.xml', $contents);
        $lineCounter = new LineCounter();
        $this->assertEquals(1, $lineCounter->count('rss.xml'));
    }
}

class LineCounter {
    public function count($fileName) {
        $contents = file_get_contents($fileName);
        return count(preg_split('/\n|\r/', $contents));
    }
}
