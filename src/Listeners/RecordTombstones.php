<?php

namespace JeffersonGoncalves\CcpaRetention\Listeners;

use JeffersonGoncalves\Ccpa\Events\PersonalDataAnonymized;
use JeffersonGoncalves\CcpaRetention\RetentionManager;

/**
 * Tombstones any anonymization (DSAR erasure, consent records...), so ccpa:retention-reapply covers it too.
 */
class RecordTombstones
{
    public function __construct(protected RetentionManager $retention) {}

    public function handle(PersonalDataAnonymized $event): void
    {
        $this->retention->tombstone($event->model, $event->columns);
    }
}
