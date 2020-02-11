<?php

namespace MarkSYS\DMPModels\Document;

use JsonSerializable;
use MarkSYS\DMPModels\Model\DMPQueueEmailCustomFieldModel;
use MarkSYS\DMPModels\Traits\BsonSerializeTrait;
use MarkSYS\DMPModels\Traits\JsonSerializeTrait;
use MongoDB\BSON\Persistable;

class DMPQueueEmailCustomFieldDocument extends DMPQueueEmailCustomFieldModel implements Persistable, JsonSerializable
{
    use BsonSerializeTrait;
    use JsonSerializeTrait;

    /**
     * @return DMPQueueEmailCustomFieldDocument
     */
    public static function createInstance(): DMPQueueEmailCustomFieldDocument
    {
        return new self();
    }
}