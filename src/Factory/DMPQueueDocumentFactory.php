<?php

namespace MarkSYS\DMPModels\Factory;

use DateTimeZone;
use MarkSYS\DMPModels\Document\DMPQueueDocument;
use MarkSYS\DMPModels\Document\DMPQueueRVMDetailsDocument;
use MarkSYS\DMPModels\Document\DMPQueueSMSDetailsDocument;
use MarkSYS\DMPModels\Traits\GenericFactoryTrait;
use MongoDB\BSON\ObjectId;
use RuntimeException;

class DMPQueueDocumentFactory
{
    use GenericFactoryTrait;

    /**
     * @param $jsonData
     * @return DMPQueueDocument
     */
    public static function createInstance($jsonData): DMPQueueDocument
    {
        if (!is_string($jsonData)) {
            throw new RuntimeException('invalid data type');
        }

        $data = json_decode($jsonData, false, 512, JSON_THROW_ON_ERROR);
        self::validate($data, DMPQueueDocument::class);

        /** @var DMPQueueDocument $dmpQueueDocument */
        $dmpQueueDocument = DMPQueueDocument::createInstance();
        foreach ($data as $key => $value) {

            if ($key === '_id' || $key === 'details') {
                continue;
            }

            $methodName = 'set' . implode('', array_map(static function ($val) {
                    return ucwords(strtolower($val));
                }, explode('_', $key)));

            if (!method_exists($dmpQueueDocument, $methodName)) {
                throw new RuntimeException('unexpected method name');
            }

            if (null !== $value && in_array($key, [
                    'date',
                    'created',
                    'updated',
                ])
            ) {
                $value = date_create(null, new DateTimeZone('UTC'))->setTimestamp($value);
            }

            $dmpQueueDocument->{$methodName}($value);
        }

        $dmpQueueDocument->setId(new ObjectId($data->_id));

        if (!empty($data->details)) {
            if ($dmpQueueDocument->getType() === 'rvm') {
                $dmpQueueDocument->setDetails(DMPQueueDetailsDocumentFactory::createInstance($data->details,
                    DMPQueueRVMDetailsDocument::class));
            } elseif ($dmpQueueDocument->getType() === 'sms') {
                $dmpQueueDocument->setDetails(DMPQueueDetailsDocumentFactory::createInstance($data->details,
                    DMPQueueSMSDetailsDocument::class));
            }
        }

        return $dmpQueueDocument;
    }
}