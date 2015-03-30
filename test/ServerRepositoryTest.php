<?php

namespace serverManager\test;


use serverManager\src\server\ServerApi;
use serverManager\src\server\ServerRepository;

class ServerRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function test_createServer_returnsServerObject()
    {
        $DB = $this->getMockBuilder('\PDO')
            ->disableOriginalConstructor()
            ->getMock();

        $ServerRepository = new ServerRepository($DB);

        $this->assertInstanceOf('serverManager\\src\\server\\Server', $ServerRepository->createServer());
    }

    public function test_saveServer_returnsTrue()
    {
        $DB = $this->getMockBuilder('PDO')
            ->disableOriginalConstructor()
            ->getMock();

        $ServerRepository = new ServerRepository($DB);
        $ServerApi = new ServerApi($ServerRepository);
        $Server = $ServerApi->createServer();

        $this->assertEquals(true, $ServerRepository->saveServer($Server));
    }
}
