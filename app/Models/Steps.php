<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Steps extends Model
{

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user',
        'steps'
    ];


    /**
     * Get the user for the steps record.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
