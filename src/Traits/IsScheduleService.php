<?php


namespace Bpuig\SubbySchedule\Traits;


trait IsScheduleService
{
    private $planSubscriptionSchedule;

    private $clearUsage = true;

    /**
     * Strategy outcome
     * @var bool
     */
    private $success = false;

    /**
     * Change the plan or throw exception
     * @throws \Exception
     */
    public function changePlan()
    {
        if ($this->success) {
            $this->planSubscriptionSchedule->processScheduledPlanChange($this->clearUsage);
        } else {
            $this->planSubscriptionSchedule->fail();
            throw new \Exception('Process failed.', 500);
        }
    }
}
