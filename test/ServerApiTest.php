<?php

namespace serverManager\test;


use serverManager\src\server\Server;
use serverManager\src\server\ServerApi;

class ServerApiTest extends \PHPUnit_Framework_TestCase
{
    public function test_createServer_returnsServerObject()
    {
        $ServerApi = new ServerApi();

        $this->assertInstanceOf('serverManager\\src\\Server', $ServerApi->createServer());
    }

    public function test_getServerAsArray_returnsArray_whenCalledWithServer()
    {
        $ServerApi = new ServerApi();
        $Server = new Server();
        $Server->setId(5);
        $Server->setHostName('alpha.example.net');

        $expectedArray = [
            'id' => 5,
            'hostName' => 'alpha.example.net'
        ];

        $this->assertEquals($expectedArray, $ServerApi->getServerAsArray($Server));
    }
}
