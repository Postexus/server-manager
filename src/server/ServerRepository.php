<?php

namespace serverManager\src\server;


class ServerRepository
{
    /** @var \PDO */
    private $DB;

    /**
     * @param \PDO $DB
     */
    public function __construct(\PDO $DB)
    {
        $this->DB = $DB;
    }

    /**
     * @return Server
     */
    public function createServer()
    {
        return new Server();
    }

    /**
     * @param Server $Server
     * @return bool
     */
    public function saveServer(Server $Server)
    {
        return true;
    }
}