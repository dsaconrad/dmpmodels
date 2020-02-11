<?php

namespace MarkSYS\DMPModels\Traits;

use ReflectionClass;
use ReflectionException;
use ReflectionProperty;
use RuntimeException;

trait GenericFactoryTrait
{
    /**
     * @param array $data
     * @param string $dataClass
     */
    public static function validate($data, $dataClass): void
    {
        $properties = [];
        try {
            if (method_exists($dataClass, 'createInstance')) {
                $reflect = new ReflectionClass($dataClass::createInstance());
            } else {
                throw new ReflectionException('method not found in class: ' . $dataClass);
            }
        } catch (ReflectionException $exception) {
            throw new RuntimeException('failed to validate class');
        }
        $props   = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
        foreach ($props as $prop) {
            $properties[] = $prop->getName();
        }
        foreach ($data as $key => $value) {
            if (!in_array($key, $properties, true)) {
                throw new RuntimeException('invalid schema');
            }
        }
    }
}