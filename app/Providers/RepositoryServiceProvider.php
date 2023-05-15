<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\AccountRepositoryInterface;
use App\Interfaces\StudentRepositoryInterface;
use App\Interfaces\ContactRepositoryInterface;
// use App\Repository\AccountRepository;
use App\Repositories\AccountRepository;
use App\Repositories\StudentRepository;
use App\Repositories\ContactRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(AccountRepositoryInterface::class,AccountRepository::class);
        $this->app->bind(StudentRepositoryInterface::class,StudentRepository::class);
        $this->app->bind(ContactRepositoryInterface::class,ContactRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
