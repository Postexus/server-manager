<?php

namespace serverManager\test;


use serverManager\src\server\ServerApi;
use serverManager\src\server\ServerRepository;

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
class ServerApiTest extends \PHPUnit_Framework_TestCase
{
    /** @var ServerApi */
    private $ServerApi;

    public function setUp()
    {
        $DB = $this->getMockBuilder('PdoMock')
//            ->disableOriginalConstructor()
            ->getMock();

        $this->ServerApi = new ServerApi(new ServerRepository($DB));
    }

    public function test_createServer_returnsServerObject()
    {
        $this->assertInstanceOf('serverManager\\src\\server\\Server', $this->ServerApi->createServer());
    }

    public function test_getServerAsArray_returnsArray_whenCalledWithServer()
    {
        $Server = $this->ServerApi->createServer();
        $Server->setId(5);
        $Server->setHostName('alpha.example.net');

        $expectedArray = [
            'id' => 5,
            'hostName' => 'alpha.example.net'
        ];

        $this->assertEquals($expectedArray, $this->ServerApi->getServerAsArray($Server));
    }
}
