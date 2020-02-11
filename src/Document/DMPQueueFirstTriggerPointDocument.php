<?php

namespace MarkSYS\DMPModels\Document;

use JsonSerializable;
use MarkSYS\DMPModels\Model\DMPQueueFirstTriggerPointModel;
use MarkSYS\DMPModels\Traits\BsonSerializeTrait;
use MarkSYS\DMPModels\Traits\JsonSerializeTrait;
use MongoDB\BSON\Persistable;

class DMPQueueFirstTriggerPointDocument extends DMPQueueFirstTriggerPointModel implements Persistable, JsonSerializable
{
    use BsonSerializeTrait;
    use JsonSerializeTrait;

    /**
     * @return DMPQueueFirstTriggerPointDocument
     */
    public static function createInstance(): DMPQueueFirstTriggerPointDocument
    {
        return new self();
    }
}