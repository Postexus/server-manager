<?php

namespace serverManager\src;

class Server
{
    /** @var int */
    private $id = 0;

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
        return "";
    }
}