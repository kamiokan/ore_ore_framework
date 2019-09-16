<?php
require_once('vendor/autoload.php');

class SampleTest extends PHPUnit\Framework\TestCase
{
    public function test_add() {
        $this->assertEquals(10, 4 + 6);
    }
}
