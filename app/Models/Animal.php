<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasUlids;
    use HasFactory;

    protected $fillable = [
        'name',
        'sex',
        'breed',
        'age',
        'dob',
        'colour',
        'markings',
        'note',
        'shortdescription',
        'weight',
        'pic2',
        'pic3',
        'pic4',
        'wormed',
        'fleaed',
        'incoming',
        'microchip',
        'kennelcough',
        'spayedneutered',
        'location',
        'locateddate',
        'status',
        'trainingdecdue',
        'firstjab',
        'spaydecdue',
        'secondjab',
        'medicalnote',
        'trainingdecreturned',
        'spaydecreturned',
        'boosterdue',
        'stichesout',
        'statuschange',
        'dow',
        'dom',
        'update_chip',
        'assesmentnote',
        'othernote',
        'adopt_app',
        'dom_update',
        'type',
        'l_modified',
        'r_homing',
        'locked',
        'lockedtime',
        'adopt_wording',
        'available_date',
        'updated_date',
        'dom_date',
        'baby',
        'ex_breeding',
        'only_animal',
        'not_mtar',
        'age_no',
        'assessment_date',
        'vetter_note',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'dob',
        'wormed',
        'fleaed',
        'incoming',
        'kennelcough',
        'spayedneutered',
        'locateddate',
        'trainingdecdue',
        'firstjab',
        'spaydecdue',
        'secondjab',
        'trainingdecreturned',
        'spaydecreturned',
        'boosterdue',
        'stichesout',
        'statuschange',
        'dom_update',
        'l_modified',
        'lockedtime',
        'available_date',
        'updated_date',
        'dom_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adopter()
    {
        return $this->belongsTo(Adopter::class);
    }
}
