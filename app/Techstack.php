<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techstack extends Model
{
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project')->withPivot('value')->withTimestamps();
    }
}
