<?php

namespace MarkSYS\DMPModels\Factory;

use MarkSYS\DMPModels\Interfaces\DMPQueueServiceDetailsInterface;
use MarkSYS\DMPModels\Traits\GenericFactoryTrait;
use RuntimeException;
use MarkSYS\DMPModels\Document\DMPQueueEmailDetailsDocument;

class DMPQueueDetailsDocumentFactory
{
    use GenericFactoryTrait;

    /**
     * @param $data
     * @param $className
     * @return DMPQueueServiceDetailsInterface
     */
    public static function createInstance($data, $className): DMPQueueServiceDetailsInterface
    {
        if (!class_exists($className)) {
            throw new RuntimeException('invalid class name');
        }

        self::validate($data, $className);
        if (method_exists($className, 'createInstance')) {
            $dmpDocument = $className::createInstance();
        } else {
            throw new RuntimeException('"createInstance" method not found in class: ' . $className);
        }
        foreach ($data as $key => $value) {

            if ($key === 'custom_fields') {
                continue;
            }

            $methodName = 'set' . implode('', array_map(static function ($val) {
                    return ucwords(strtolower($val));
                }, explode('_', $key)));

            if (!method_exists($dmpDocument, $methodName)) {
                throw new RuntimeException('unexpected method name');
            }


            if ($className === DMPQueueEmailDetailsDocument::class) {
                foreach ($data['custom_fields'] as $customField) {
                    $dmpQueueEmailDetailsCustomFieldDocument = DMPQueueDetailsEmailCustomFieldFactory::createInstance($customField);
                    $dmpDocument->addCustomField($dmpQueueEmailDetailsCustomFieldDocument);
                }
            }

            $dmpDocument->{$methodName}($value);
        }

        return $dmpDocument;
    }
}