<?php

namespace serverManager\test;


use serverManager\src\server\Server;

class ServerTest extends \PHPUnit_Framework_TestCase
{
    public function test_getId_returnsInteger()
    {
        $Server = new Server();

        $this->assertInternalType('integer', $Server->getId());
    }

    public function test_getId_returnsIdSetBySetId()
    {
        $Server = new Server();
        $Server->setId(5);

        $this->assertEquals(5, $Server->getId());
    }

    public function test_getHostName_returnsString()
    {
        $Server = new Server();

        $this->assertInternalType('string', $Server->getHostName());
    }

    public function test_getHostName_returnsCorrectHostName_whenSetBySetHostName()
    {
        $Server = new Server();
        $Server->setHostName('alpha.example.net');

        $this->assertEquals('alpha.example.net', $Server->getHostName());
    }
}