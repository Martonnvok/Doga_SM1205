<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected  $primaryKey = 'agency_id';

    protected $fillable = [
        'name',
        'country',
        'type'
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'agency_id');
    }

    public function participations()
    {
        return $this->hasManyThrough(Participate::class, Event::class, 'agency_id', 'event_id');
    }
}
