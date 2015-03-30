<?php

namespace serverManager\test;


use serverManager\src\Server;

class ServerTest extends \PHPUnit_Framework_TestCase
{
    public function test_getId_returnsInteger()
    {
        $Server = new Server();

        $this->assertInternalType('integer', $Server->getId());
    }
}