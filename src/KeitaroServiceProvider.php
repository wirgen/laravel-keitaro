<?php

declare(strict_types=1);

namespace Wirgen\Larataro;

use Illuminate\Support\ServiceProvider;
use Wirgen\Keitaro\Keitaro as BaseKeitaro;

class KeitaroServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $configPath = __DIR__ . '/../config/keitaro.php';
        $this->mergeConfigFrom($configPath, 'keitaro');

        $this->app->singleton(BaseKeitaro::class, function () {
            return new BaseKeitaro(config('keitaro.api_domain'), config('keitaro.api_key'));
        });

        $this->app->alias(BaseKeitaro::class, 'keitaro');
    }

    public function boot(): void
    {
        $configPath = __DIR__ . '/../config/keitaro.php';
        $this->publishes([$configPath => $this->getConfigPath()]);
    }

    public function getConfigPath(): string
    {
        return config_path('keitaro.php');
    }
}
