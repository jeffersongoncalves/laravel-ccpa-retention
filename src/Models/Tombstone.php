<?php

namespace JeffersonGoncalves\CcpaRetention\Models;

use JeffersonGoncalves\Privacy\Retention\Tombstone as BaseTombstone;

class Tombstone extends BaseTombstone
{
    public function getTable(): string
    {
        return config('ccpa-retention.table', 'ccpa_retention_tombstones');
    }
}
