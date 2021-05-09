## Installation

Installation is simple, follow this steps:

### Previous Requirements

This extra uses Laravel 8 batch processing. If you do not use the Jobs included in the package and make your own
processing jobs you do not need batch processing tables. If you intend to use package jobs refer
to [Queues: Job batching](https://laravel.com/docs/8.x/queues#job-batching) in Laravel's official documentation.

# Installation

Install the package via composer:

```shell
composer require bpuig/laravel-subby-schedule
```

Publish the configuration:

```shell
php artisan vendor:publish --tag=subby.schedule.config
```

Publish migrations:

```shell
php artisan vendor:publish --tag=subby.schedule.migrations
```

Migrate:

```shell
php artisan migrate
```

### Configuration

Once config is published, you can specify your services:

```php
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

```

### Extend Plan Subscription Model

Since this extension is activated by a trait in your `PlanSubscription` model, you need to extend it.

```shell
php artisan make:model PlanSubscription
```

Then edit it to extend package model and add `IsScheduled` trait.

```php
<?php

namespace App\Models;

use Bpuig\SubbySchedule\Traits\IsScheduled;

class PlanSubscription extends \Bpuig\Subby\Models\PlanSubscription
{
    use IsScheduled;
}

```

That is it, now you are capable of scheduling subscription plan changes.
