<?php
class TemplaterTest extends PHPUnit_Framework_TestCase {
    public function testReplacesPlaceholdersWithActualValues() {
        $templater = new Templater();
        $templater->defineTemplate('foo', 'foo {bar}');
        $rendered = $templater->render('foo', array('bar' => 'baz'));
        $this->assertThat($rendered, $this->equalTo('foo baz'));
    }
}

class Templater {
    function __construct() {
        $this->templates = array();
    }

    public function defineTemplate($name, $contents) {
        $this->templates[$name] = $contents;
    }

    public function render($name, $params) {
        return $this->supplant($this->templates[$name], $params);
    }

    private function supplant($contents, $params) {
        foreach ($params as $key => $value) {
            $contents = implode($value, explode('{'.$key.'}', $contents));
        }
        return $contents;
    }
}
