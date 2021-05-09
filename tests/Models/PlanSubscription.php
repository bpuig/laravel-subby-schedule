<?php

namespace Bpuig\SubbySchedule\Tests\Models;

use Bpuig\SubbySchedule\Traits\IsScheduled;

class PlanSubscription extends \Bpuig\Subby\Models\PlanSubscription
{
    use IsScheduled;
}
