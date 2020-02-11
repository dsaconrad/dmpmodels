<?php

namespace MarkSYS\DMPModels\Document;

use JsonSerializable;
use MarkSYS\DMPModels\Model\DMPQueueSMSDetailsModel;
use MarkSYS\DMPModels\Traits\BsonSerializeTrait;
use MarkSYS\DMPModels\Traits\JsonSerializeTrait;
use MongoDB\BSON\Persistable;

class DMPQueueSMSDetailsDocument extends DMPQueueSMSDetailsModel implements Persistable, JsonSerializable
{
    use BsonSerializeTrait;
    use JsonSerializeTrait;

    /**
     * @return DMPQueueSMSDetailsDocument
     */
    public static function createInstance(): DMPQueueSMSDetailsDocument
    {
        return new self();
    }
}