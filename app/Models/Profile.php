<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'services',
        'address',
        'photo',
        'visible',
        'user_id'
    ];

    //*** RELATIONS ***//
    /**
     * User Relation
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Typologies Relation
     */
    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }
}
