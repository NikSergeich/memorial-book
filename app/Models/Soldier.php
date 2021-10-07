<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    use HasFactory;

    protected $hidden = [
        'birthday',
        'month_of_birth',
        'year_of_birth',
        'death_date',
        'death_month',
        'year_of_death',
    ];

    protected $appends = [
        'date_of_birth',
        'date_of_death'
    ];

    public function getDateOfBirthAttribute() {
        return "{$this->birthday}.{$this->month_of_birth}.{$this->year_of_birth}";
    }

    public function getDateOfDeathAttribute() {
        return "{$this->death_date}.{$this->death_month}.{$this->year_of_death}";
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function awards () {
        return $this->morphToMany(Award::class, 'awardable');
    }

    public function galleries () {
        return $this->morphMany(Gallery::class, 'galleryable');
    }
}
