<?php

namespace serverManager\test;


use serverManager\src\server\ServerRepository;

class ServerRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function test_createServer_returnsServerObject()
    {
        $ServerRepository = new ServerRepository();

        $this->assertInstanceOf('serverManager\\src\\server\\Server', $ServerRepository->createServer());
    }
}
