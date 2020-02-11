<?php

namespace MarkSYS\DMPModels\Model;

use DateTime;
use DateTimeZone;
use MarkSYS\DMPModels\Interfaces\DMPQueueServiceDetailsInterface;

class DMPQueueModel
{
    /**
     * @var string
     */
    protected string $job_id;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var string
     */
    protected string $timezone;

    /**
     * @var DateTime
     */
    protected DateTime $date;

    /**
     * @var string
     */
    protected string $ct_number;

    /**
     * @var DMPQueueServiceDetailsInterface|object
     */
    protected object $details;

    /**
     * @var string
     */
    protected string $target;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var DateTime
     */
    protected DateTime $created;

    /**
     * @var DateTime
     */
    protected DateTime $updated;

    public function __construct()
    {
        $this->created = new DateTime('now', new DateTimeZone('UTC'));
    }

    /**
     * @return string
     */
    public function getJobId(): string
    {
        return $this->job_id;
    }

    /**
     * @param string $job_id
     * @return DMPQueueModel
     */
    public function setJobId(string $job_id): DMPQueueModel
    {
        $this->job_id = $job_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return DMPQueueModel
     */
    public function setType(string $type): DMPQueueModel
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return DMPQueueModel
     */
    public function setTimezone(string $timezone): DMPQueueModel
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return DMPQueueModel
     */
    public function setDate(DateTime $date): DMPQueueModel
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getCtNumber(): string
    {
        return $this->ct_number;
    }

    /**
     * @param string $ct_number
     * @return DMPQueueModel
     */
    public function setCtNumber(string $ct_number): DMPQueueModel
    {
        $this->ct_number = $ct_number;

        return $this;
    }

    /**
     * @return DMPQueueServiceDetailsInterface|object
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param DMPQueueServiceDetailsInterface|object $details
     * @return DMPQueueModel
     */
    public function setDetails(DMPQueueServiceDetailsInterface $details): DMPQueueModel
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     * @return DMPQueueModel
     */
    public function setTarget(string $target): DMPQueueModel
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return DMPQueueModel
     */
    public function setStatus(string $status): DMPQueueModel
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return DMPQueueModel
     */
    public function setCreated(DateTime $created): DMPQueueModel
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdated(): DateTime
    {
        return $this->updated;
    }

    /**
     * @param DateTime $updated
     * @return DMPQueueModel
     */
    public function setUpdated(DateTime $updated): DMPQueueModel
    {
        $this->updated = $updated;

        return $this;
    }
}