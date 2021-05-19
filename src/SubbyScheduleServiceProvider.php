<?php

declare(strict_types=1);

namespace Bpuig\SubbySchedule;

use Illuminate\Support\ServiceProvider;

class SubbyScheduleServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishConfig();
        $this->publishMigrations();
    }

    /**
     * Publish package config.
     *
     * @return void
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('subby.schedule.php')
        ], 'subby.schedule.config');
    }


    /**
     * Publish package migrations.
     *
     * @return void
     */
    protected function publishMigrations()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_plan_subscription_schedules_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_plan_subscription_schedules_table.php')
        ], 'subby.schedule.migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/v1.0.0/alter_plan_subscription_schedules_table_subscription_id.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_alter_plan_subscription_schedules_table_subscription_id.php'),
        ], 'subby.schedule.migrations.v1.0.0');
    }

}
