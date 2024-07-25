<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static select()
 * @method static where(string $string, string $string1)
 */
class Animal extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'sex',
        'breed',
        'age',
        'dob',
        'colour',
        'markings',
        'note',
        'short_description',
        'weight',
        'pic2',
        'pic3',
        'pic4',
        'wormed',
        'fleaed',
        'incoming',
        'microchip',
        'kennel_cough',
        'spayed_neutered',
        'location',
        'located_date',
        'status',
        'training_dec_due',
        'first_jab',
        'spay_dec_due',
        'second_jab',
        'medical_note',
        'training_dec_returned',
        'spay_dec_returned',
        'booster_due',
        'stitches_out',
        'status_change',
        'dow',
        'dom',
        'update_chip',
        'assessment_note',
        'other_note',
        'adopt_app',
        'dom_update',
        'type',
        'l_modified',
        'r_homing',
        'locked',
        'locked_time',
        'adopt_wording',
        'available_date',
        'updated_date',
        'dom_date',
        'baby',
        'ex_breeding',
        'only_animal',
        'from_outside',
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
        'kennel_cough',
        'spayed_neutered',
        'located_date',
        'training_dec_due',
        'first_jab',
        'spay_dec_due',
        'second_jab',
        'training_dec_returned',
        'spay_dec_returned',
        'booster_due',
        'stitches_out',
        'status_change',
        'dom_update',
        'l_modified',
        'locked_time',
        'available_date',
        'updated_date',
        'dom_date',
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(User::class, 'located_at');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'animal_id');
    }

    protected function casts(): array
    {
        return [
            'locked_time' => 'datetime',
        ];
    }
}
