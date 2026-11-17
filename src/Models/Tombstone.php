<?php

namespace JeffersonGoncalves\CcpaRetention\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $model_type
 * @property string $model_id
 * @property string $column
 * @property string $fingerprint
 */
class Tombstone extends Model
{
    public const UPDATED_AT = null;

    protected $guarded = [];

    public function getTable(): string
    {
        return config('ccpa-retention.table', 'ccpa_retention_tombstones');
    }
}
