<?php

namespace serverManager\src\server;


class ServerRepository
{
    /** @var \PDO */
    private $DB;

    /**
     * @param \PDO $DB
     * @todo Introduce type hinting for database once a suitable test solution has been found
     */
    public function __construct($DB)
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
        $Statement = $this->DB->prepare("INSERT INTO servers (id, host_name) VALUES (:id, :hostname)");
        $Statement->bindValue(":id", $Server->getId());
        $Statement->bindValue(":host_name", $Server->getHostName());

        return $Statement->execute();
    }
}