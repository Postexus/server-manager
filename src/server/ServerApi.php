<?php

namespace serverManager\src\server;


class ServerApi
{
    /** @var ServerRepository */
    private $ServerRepository;

    public function __construct(ServerRepository $ServerRepository)
    {
        $this->ServerRepository = $ServerRepository;
    }

    /**
     * @return Server
     */
    public function createServer()
    {
        return $this->ServerRepository->createServer();
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