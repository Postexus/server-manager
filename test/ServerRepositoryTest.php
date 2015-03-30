<?php

namespace serverManager\test;


use serverManager\src\server\ServerApi;
use serverManager\src\server\ServerRepository;

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
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

    /**
     * @TODO This should actually do something rather than test that the mock is being used...
     */
    public function test_saveServer_returnsTrue()
    {
        $Statement = $this->getMockBuilder('PDOStatement')
            ->setMethods(['bindValue', 'execute'])
            ->getMock();
        $Statement->expects($this->any())
            ->method('bindValue')
            ->will($this->returnValue($Statement));
        $Statement->expects($this->any())
            ->method('execute')
            ->willReturn(true);

        $DB = $this->getMockBuilder('PDO')
            ->disableOriginalConstructor()
            ->setMethods(['prepare'])
            ->getMock();

        $DB->expects($this->once())
            ->method('prepare')
            ->willReturn($Statement);

        $ServerRepository = new ServerRepository($DB);
        $ServerApi = new ServerApi($ServerRepository);
        $Server = $ServerApi->createServer();

        $this->assertEquals(true, $ServerRepository->saveServer($Server));
    }
}
