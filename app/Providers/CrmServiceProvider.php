<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\Crm\CrmApiClient;
use Illuminate\Support\ServiceProvider;

final class CrmServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            base_path('config/crm.php'),
            'crm',
        );

        $this->app->singleton(CrmApiClient::class, static fn (): CrmApiClient => CrmApiClient::fromConfig());
    }
}
