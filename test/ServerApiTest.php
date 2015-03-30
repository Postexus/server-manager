<?php

namespace serverManager\test;


use serverManager\src\ServerApi;

class ServerApiTest extends \PHPUnit_Framework_TestCase
{
    public function test_createServer_returnsServerObject()
    {
        $ServerApi = new ServerApi();

        $this->assertInstanceOf('serverManager\\src\\Server', $ServerApi->createServer());
    }
}
