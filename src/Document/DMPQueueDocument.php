<?php

namespace MarkSYS\DMPModels\Document;

use JsonSerializable;
use MarkSYS\DMPModels\Model\DMPQueueModel;
use MarkSYS\DMPModels\Traits\BsonSerializeTrait;
use MarkSYS\DMPModels\Traits\JsonSerializeTrait;
use MongoDB\BSON\ObjectId;
use MongoDB\BSON\Persistable;

class DMPQueueDocument extends DMPQueueModel implements Persistable, JsonSerializable
{
    use BsonSerializeTrait;
    use JsonSerializeTrait;

    /**
     * @var ObjectId
     */
    protected ObjectId $_id;

    /**
     * @return DMPQueueDocument
     */
    public static function createInstance(): DMPQueueDocument
    {
        return new self();
    }

    public function __construct()
    {
        parent::__construct();

        $this->_id = new ObjectId();
    }

    /**
     * @return ObjectId
     */
    public function getId(): ObjectId
    {
        return $this->_id;
    }

    /**
     * @param ObjectId $id
     * @return DMPQueueDocument
     */
    public function setId(ObjectId $id): DMPQueueDocument
    {
        $this->_id = $id;

        return $this;
    }
}