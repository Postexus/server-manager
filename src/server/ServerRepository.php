<?php

namespace serverManager\src\server;


class ServerRepository
{
    /**
     * @return Server
     */
    public function createServer()
    {
        return new Server();
    }
}