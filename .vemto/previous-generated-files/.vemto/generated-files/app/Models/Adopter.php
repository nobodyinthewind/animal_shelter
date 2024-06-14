<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adopter extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
