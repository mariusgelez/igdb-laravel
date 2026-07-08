<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use MariusGelez\IGDBLaravel\Console\CreateWebhook;
use MariusGelez\IGDBLaravel\Console\DeleteWebhook;
use MariusGelez\IGDBLaravel\Console\ListWebhooks;
use MariusGelez\IGDBLaravel\Console\PublishCommand;
use MariusGelez\IGDBLaravel\Console\ReactivateWebhook;

class IGDBLaravelServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('igdb.php'),
        ], 'igdb:config');

        Route::group($this->routeConfiguration(), function (): void {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
                CreateWebhook::class,
                ListWebhooks::class,
                DeleteWebhook::class,
                ReactivateWebhook::class,
            ]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php',
            'igdb',
        );
    }

    protected function routeConfiguration(): array
    {
        return [
            'prefix' => config('igdb.webhook_path'),
        ];
    }
}
