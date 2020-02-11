<?php

namespace MarkSYS\DMPModels\Model;

use DateTime;
use DateTimeZone;
use Exception;

class DMPQueueFirstTriggerPointModel
{
    public const STATUS_QUEUED    = 'queued';
    public const STATUS_RUNNING   = 'running';
    public const STATUS_FAILED    = 'failed';
    public const STATUS_COMPLETED = 'completed';

    /**
     * @var string
     */
    protected string $job_id;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var DateTime
     */
    protected DateTime $date_added;

    /**
     * @var DateTime
     */
    protected DateTime $date_updated;

    /**
     * @var DateTime
     */
    protected DateTime $delivery_date;

    /**
     * @var string
     */
    protected string $message;

    /**
     * DMPQueueFirstTriggerPointModel constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->date_added = new DateTime('now', new DateTimeZone('UTC'));
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
     * @return DMPQueueFirstTriggerPointModel
     */
    public function setJobId(string $job_id): DMPQueueFirstTriggerPointModel
    {
        $this->job_id = $job_id;

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
     * @return  DMPQueueFirstTriggerPointModel
     */
    public function setStatus(string $status): DMPQueueFirstTriggerPointModel
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateAdded(): DateTime
    {
        return $this->date_added;
    }

    /**
     * @param DateTime $date_added
     * @return DMPQueueFirstTriggerPointModel
     */
    public function setDateAdded(DateTime $date_added): DMPQueueFirstTriggerPointModel
    {
        $this->date_added = $date_added;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->date_updated;
    }

    /**
     * @param DateTime $date_updated
     * @return DMPQueueFirstTriggerPointModel
     */
    public function setDateUpdated(DateTime $date_updated): DMPQueueFirstTriggerPointModel
    {
        $this->date_updated = $date_updated;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDate(): DateTime
    {
        return $this->delivery_date;
    }

    /**
     * @param DateTime $delivery_date
     * @return DMPQueueFirstTriggerPointModel
     */
    public function setDeliveryDate(DateTime $delivery_date): DMPQueueFirstTriggerPointModel
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return DMPQueueFirstTriggerPointModel
     */
    public function setMessage(string $message): DMPQueueFirstTriggerPointModel
    {
        $this->message = $message;

        return $this;
    }
}