<?php

namespace MarkSYS\DMPModels\Model;

use MarkSYS\DMPModels\Interfaces\DMPQueueServiceDetailsInterface;

class DMPQueueEmailDetailsModel implements DMPQueueServiceDetailsInterface
{
    /**
     * @var string
     */
    private string $mailing_list_id;

    /**
     * @var array
     */
    private array $custom_fields;

    public function __construct()
    {
        $this->custom_fields = [];
    }

    /**
     * @return string
     */
    public function getMailingListId(): string
    {
        return $this->mailing_list_id;
    }

    /**
     * @param string $mailing_list_id
     */
    public function setMailingListId(string $mailing_list_id): void
    {
        $this->mailing_list_id = $mailing_list_id;
    }

    /**
     * @return array
     */
    public function getCustomFields(): array
    {
        return $this->custom_fields;
    }

    /**
     * @param array $custom_fields
     */
    public function setCustomFields( array $custom_fields): void
    {
        $this->custom_fields = $custom_fields;
    }
}