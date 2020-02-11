<?php

namespace MarkSYS\DMPModels\Traits;

use DateTime;
use DateTimeZone;
use MongoDB\BSON\UTCDateTime;

trait BsonSerializeTrait
{
    protected function bsonSerializeField($field)
    {
        if ($field instanceof DateTime) {
            return new UTCDateTime($field);
        }

        return $field;
    }

    protected function bsonUnserializeField($field)
    {
        if ($field instanceof UTCDateTime) {
            return $field->toDateTime()->setTimezone(new DateTimeZone('UTC'));
        }

        return $field;
    }

    public function bsonSerialize(): array
    {
        $fields = [];
        foreach (get_object_vars($this) as $key => $value) {
            $fields[$key] = $this->bsonSerializeField($value);
        }

        return $fields;
    }

    public function bsonUnserialize(array $data): void
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $this->bsonUnserializeField($value);
            }
        }
    }
}