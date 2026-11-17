<?php

namespace JeffersonGoncalves\CcpaRetention\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Ccpa\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Ccpa\Contracts\HasPersonalData;
use JeffersonGoncalves\CcpaRetention\Contracts\HasRetentionStart;

#[PersonalData('signer', retention: '1 year')]
class Contract extends Model implements HasPersonalData, HasRetentionStart
{
    use InteractsWithPersonalData;

    protected $guarded = [];

    public $timestamps = false;

    public static function retentionStartColumn(): string
    {
        return 'ended_at';
    }
}
