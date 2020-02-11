<?php


namespace MarkSYS\DMPModels\Model;

class DMPQueueEmailCustomFieldModel
{
    /**
     * @var string
     */
    private string $field_name;

    /**
     * @var string
     */
    private string $default_value;

    /**
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->field_name;
    }

    /**
     * @param string $field_name
     */
    public function setFieldName(string $field_name): void
    {
        $this->field_name = $field_name;
    }

    /**
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->default_value;
    }

    /**
     * @param string $default_value
     */
    public function setDefaultValue( string $default_value): void
    {
        $this->default_value = $default_value;
    }
}