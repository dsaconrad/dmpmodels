<?php

namespace MarkSYS\DMPModels\Factory;

use MarkSYS\DMPModels\Document\DMPQueueEmailCustomFieldDocument;
use MarkSYS\DMPModels\Traits\GenericFactoryTrait;
use RuntimeException;

class DMPQueueDetailsEmailCustomFieldFactory
{
    use GenericFactoryTrait;

    /**
     * @param $data
     * @return DMPQueueEmailCustomFieldDocument
     */
    public static function createInstance($data): DMPQueueEmailCustomFieldDocument
    {
        self::validate($data, DMPQueueEmailCustomFieldDocument::class);
        $dmpQueueCustomFields = DMPQueueEmailCustomFieldDocument::createInstance();
        foreach ($data as $key => $value) {
            $methodName = 'set' . implode('', array_map(static function ($val) {
                    return ucwords(strtolower($val));
                }, explode('_', $key)));

            if (!method_exists($dmpQueueCustomFields, $methodName)) {
                throw new RuntimeException('unexpected method name');
            }

            $dmpQueueCustomFields->{$methodName}($value);
        }

        return $dmpQueueCustomFields;
    }
}