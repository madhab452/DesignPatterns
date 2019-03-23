<?php
namespace src\Lib\Facade;

class Post
{
    /** @var int $id */
    private $id;

    /** @var string $status */
    private $status;

    /**
     * Post constructor.
     * @param int $id
     * @param string $status
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}
