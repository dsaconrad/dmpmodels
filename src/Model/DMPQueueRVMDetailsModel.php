<?php

namespace MarkSYS\DMPModels\Model;

use MarkSYS\DMPModels\Interfaces\DMPQueueServiceDetailsInterface;

class DMPQueueRVMDetailsModel implements DMPQueueServiceDetailsInterface
{
    /**
     * @var string
     */
    protected string $resource_id;

    /**
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resource_id;
    }

    /**
     * @param string $resource_id
     * @return DMPQueueRVMDetailsModel
     */
    public function setResourceId(string $resource_id): DMPQueueRVMDetailsModel
    {
        $this->resource_id = $resource_id;

        return $this;
    }
}