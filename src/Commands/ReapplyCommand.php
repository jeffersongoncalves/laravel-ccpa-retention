<?php

namespace JeffersonGoncalves\CcpaRetention\Commands;

use JeffersonGoncalves\CcpaRetention\RetentionManager;
use JeffersonGoncalves\Privacy\Retention\Commands\ReapplyCommand as BaseReapplyCommand;

class ReapplyCommand extends BaseReapplyCommand
{
    protected $signature = 'ccpa:retention-reapply';

    protected string $manager = RetentionManager::class;
}
