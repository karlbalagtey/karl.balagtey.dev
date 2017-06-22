<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    protected $with = ['skills', 'technologies'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skills()
    {
        return $this->hasMany('App\Skill');
    }

    public function technologies()
    {
        return $this->belongsToMany('App\Techstack')->withPivot('value')->withTimestamps();
    }
}
