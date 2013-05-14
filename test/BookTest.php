<?php
class BookTest extends PHPUnit_Framework_TestCase {
    public function testCanBeLentAndReturned() {
        $book = new Book();
        $this->assertTrue($book->isLendable());
        $book->borrow();
        $this->assertFalse($book->isLendable());
        $book->giveBack();
        $this->assertTrue($book->isLendable());
    }
}

class Book {
    private $lendable = true;
    public function borrow() {
        $this->lendable = false;
    }
    public function giveBack() {
        $this->lendable = true;
    }
    public function isLendable() {
        return $this->lendable;
    }
}
