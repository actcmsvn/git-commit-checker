<?php

namespace Actcmsvn\GitCommitChecker\Providers;

use Actcmsvn\GitCommitChecker\Commands\InstallCommand;
use Actcmsvn\GitCommitChecker\Commands\PreCommitHookCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
            PreCommitHookCommand::class,
        ]);
    }
}
