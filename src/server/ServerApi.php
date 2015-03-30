<?php

namespace serverManager\src\server;


class ServerApi
{
    /**
     * @return Server
     */
    public function createServer()
    {
        return new Server();
    }

    /**
     * @param Server $Server
     * @return array
     */
    public function getServerAsArray(Server $Server)
    {
        return [
            'id' => $Server->getId(),
            'hostName' => $Server->getHostName()
        ];
    }
}