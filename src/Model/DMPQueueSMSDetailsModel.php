<?php

namespace MarkSYS\DMPModels\Model;

use MarkSYS\DMPModels\Interfaces\DMPQueueServiceDetailsInterface;

class DMPQueueSMSDetailsModel implements DMPQueueServiceDetailsInterface
{
    /**
     * @var string
     */
    protected string $job_id;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var string
     */
    protected string $account_sid;

    /**
     * @return string
     */
    public function getJobId(): string
    {
        return $this->job_id;
    }

    /**
     * @param string $job_id
     * @return DMPQueueSMSDetailsModel
     */
    public function setJobId(string $job_id): DMPQueueSMSDetailsModel
    {
        $this->job_id = $job_id;

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
     * @return DMPQueueSMSDetailsModel
     */
    public function setMessage(string $message): DMPQueueSMSDetailsModel
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountSid(): string
    {
        return $this->account_sid;
    }

    /**
     * @param string $account_sid
     * @return DMPQueueSMSDetailsModel
     */
    public function setAccountSid(string $account_sid): DMPQueueSMSDetailsModel
    {
        $this->account_sid = $account_sid;

        return $this;
    }
}