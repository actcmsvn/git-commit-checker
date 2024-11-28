<?php

namespace ACTCMS\GitCommitChecker\Providers;

use ACTCMS\GitCommitChecker\Commands\InstallCommand;
use ACTCMS\GitCommitChecker\Commands\PreCommitHookCommand;
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
