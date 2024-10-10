<?php
require 'vendor/autoload.php'; // Include Composer's autoload

use PHPUnit\Framework\TestCase; // Use the TestCase class from PHPUnit

require 'hello.php'; // Include the file containing the function

class HelloTest extends TestCase {
    public function testSayHello() {
        $this->assertEquals("Hello, World!", sayHello("World"));
        $this->assertEquals("Hello, PHP!", sayHello("PHP"));
        $this->assertEquals("Hello, Suraj!", sayHello("Suraj"));
    }
}
