<?php

namespace MarkSYS\DMPModels\Document;

use JsonSerializable;
use MarkSYS\DMPModels\Model\DMPQueueRVMDetailsModel;
use MarkSYS\DMPModels\Traits\BsonSerializeTrait;
use MarkSYS\DMPModels\Traits\JsonSerializeTrait;
use MongoDB\BSON\Persistable;

class DMPQueueRVMDetailsDocument extends DMPQueueRVMDetailsModel implements Persistable, JsonSerializable
{
    use BsonSerializeTrait;
    use JsonSerializeTrait;

    /**
     * @return DMPQueueRVMDetailsDocument
     */
    public static function createInstance(): DMPQueueRVMDetailsDocument
    {
        return new self();
    }
}