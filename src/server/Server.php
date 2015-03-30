<?php

namespace serverManager\src\server;

class Server
{
    /** @var int */
    private $id = 0;
    /** @var string */
    private $hostName = '';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @param string $hostName
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
    }
}