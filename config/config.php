<?php

declare(strict_types=1);

return [
    'schedules_per_subscription' => null, // Maximum number of schedules allowed for a subscription (null for no limit)
    // Database Tables
    'tables' => [
        'plan_subscription_schedules' => 'plan_subscription_schedules'
    ],
    'models' => [
        'plan_subscription_schedule' => \Bpuig\SubbySchedule\Models\PlanSubscriptionSchedule::class,
    ],
    'services' => [
        'default' => \Bpuig\SubbySchedule\Services\DefaultScheduleService::class
    ]
];
