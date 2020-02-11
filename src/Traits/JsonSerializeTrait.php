<?php

namespace MarkSYS\DMPModels\Traits;

use DateTime;
use MongoDB\BSON\ObjectId;

trait JsonSerializeTrait
{
    public function jsonSerializeField($field)
    {
        if ($field instanceof DateTime) {
            return $field->getTimestamp();
        }

        if ($field instanceof ObjectId) {
            return (string)$field;
        }

        return $field;
    }

    public function jsonSerialize(): array
    {
        $fields = [];
        foreach (get_object_vars($this) as $key => $value) {
            $fields[$key] = $this->jsonSerializeField($value);
        }

        return $fields;
    }
}