<?php

namespace App\Providers;

use App\Services\AccessoriesService;
use App\Services\AccountService;
use App\Services\AudiencesService;
use App\Services\CommentsService;
use App\Services\DepartmentsService;
use App\Services\EquipmentService;
use App\Services\FacultiesService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->facades();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    private function facades()
    {
        $this->app->bind('accessories.facade', AccessoriesService::class);
        $this->app->bind('account.facade', AccountService::class);
        $this->app->bind('audiences.facade', AudiencesService::class);
        $this->app->bind('comments.facade', CommentsService::class);
        $this->app->bind('departments.facade', DepartmentsService::class);
        $this->app->bind('equipment.facade', EquipmentService::class);
        $this->app->bind('faculties.facade', FacultiesService::class);
    }
}
