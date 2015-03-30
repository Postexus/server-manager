<?php

namespace serverManager\src;


class ServerApi
{
    /**
     * @return Server
     */
    public function createServer()
    {
        return new Server();
    }
}