<?php


namespace Bpuig\SubbySchedule\Tests\Services;


use Bpuig\SubbySchedule\Contracts\PlanSubscriptionScheduleService;
use Bpuig\SubbySchedule\Traits\IsScheduleService;

class SuccessScheduleService implements PlanSubscriptionScheduleService
{

    use IsScheduleService;

    /**
     * DefaultScheduleService constructor.
     * Save current Plan Subscription Schedule
     * @param $planSubscriptionSchedule
     */
    public function __construct($planSubscriptionSchedule)
    {
        $this->planSubscriptionSchedule = $planSubscriptionSchedule;
    }

    /**
     * Execute the strategy
     */
    public function execute()
    {
        $this->success = true;
    }
}
