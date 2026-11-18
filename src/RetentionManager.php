<?php

namespace JeffersonGoncalves\CcpaRetention;

use JeffersonGoncalves\Ccpa\Ccpa;
use JeffersonGoncalves\CcpaRetention\Models\Tombstone;
use JeffersonGoncalves\Privacy\Retention\RetentionManager as BaseRetentionManager;

/**
 * Anonymizes personal data whose retention period has ended, tombstones every anonymization of the suite and
 * re-applies them after a backup restore.
 */
class RetentionManager extends BaseRetentionManager
{
    protected string $config = 'ccpa-retention';

    protected string $tombstone = Tombstone::class;

    public function __construct(Ccpa $ccpa)
    {
        parent::__construct($ccpa);
    }
}
