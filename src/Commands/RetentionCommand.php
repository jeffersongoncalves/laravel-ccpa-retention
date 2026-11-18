<?php

namespace JeffersonGoncalves\CcpaRetention\Commands;

use JeffersonGoncalves\CcpaRetention\RetentionManager;
use JeffersonGoncalves\Privacy\Retention\Commands\RetentionCommand as BaseRetentionCommand;

class RetentionCommand extends BaseRetentionCommand
{
    protected $signature = 'ccpa:retention {--dry-run : Only count the records that would be anonymized}';

    protected string $manager = RetentionManager::class;
}
