<?php

namespace MarkSYS\DMPModels\Document;

use JsonSerializable;
use MarkSYS\DMPModels\Model\DMPQueueEmailDetailsModel;
use MarkSYS\DMPModels\Traits\BsonSerializeTrait;
use MarkSYS\DMPModels\Traits\JsonSerializeTrait;
use MongoDB\BSON\Persistable;

class DMPQueueEmailDetailsDocument extends DMPQueueEmailDetailsModel implements Persistable, JsonSerializable
{
    use BsonSerializeTrait;
    use JsonSerializeTrait;

    /**
     * @return DMPQueueEmailDetailsDocument
     */
    public static function createInstance(): DMPQueueEmailDetailsDocument
    {
        return new self();
    }
}