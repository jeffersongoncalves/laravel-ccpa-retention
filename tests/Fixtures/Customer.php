<?php

namespace JeffersonGoncalves\CcpaRetention\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Ccpa\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Ccpa\Contracts\HasPersonalData;
use JeffersonGoncalves\Ccpa\Enums\AnonymizeStrategy;

#[PersonalData('name', retention: '1 year', anonymize: AnonymizeStrategy::Mask)]
#[PersonalData('email', retention: '2 years', anonymize: AnonymizeStrategy::Hash)]
#[PersonalData('tax_id', retention: '5 years', anonymize: AnonymizeStrategy::Keep)]
#[PersonalData('notes')]
class Customer extends Model implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $guarded = [];
}
