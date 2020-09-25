<?php
require_once "../vendor/autoload.php";

use jruedaq\GravatarUrl\GetGravatar;
use PHPUnit\Framework\TestCase;

class TestGravatar extends TestCase
{
    public function testGravatarRequest()
    {
        $obj = new GetGravatar("Juan David Rueda Quiroga", "jrueda@oneago.com", 500);
        print_r($obj);
    }
}
