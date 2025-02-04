<?php

declare(strict_types=1);

namespace Codeplugtech\PlugDashboard;

use Codeplugtech\PlugDashboard\Livewire\Profile;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class PlugDashboardServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        Livewire::component('codeplugtech.plug-dashboard.livewire.profile', Profile::class);
        $this->registerResources();
    }

    public function register(): void
    {

    }

    protected function registerResources(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'plug-dashboard');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->publishes([
            __DIR__.'/../public' => $this->app->publicPath('codeplugtech/plug-dashboard'),
        ], 'plug-compiled');
        $this->publishes([
            __DIR__.'/../resources/js' => $this->app->resourcePath('js/codeplugtech/plug-dashboard'),
            __DIR__.'/../resources/css' => $this->app->resourcePath('css/codeplugtech/plug-dashboard'),
        ], 'plug-vendor');

    }
}
