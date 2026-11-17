<?php

namespace JeffersonGoncalves\CcpaRetention\Commands;

use Illuminate\Console\Command;
use JeffersonGoncalves\CcpaRetention\RetentionManager;

class ReapplyCommand extends Command
{
    protected $signature = 'ccpa:retention-reapply';

    protected $description = 'Re-anonymize tombstoned personal data that came back, e.g. after restoring a backup';

    public function handle(RetentionManager $retention): int
    {
        $this->info($retention->reapply().' column(s) re-anonymized.');

        return self::SUCCESS;
    }
}
