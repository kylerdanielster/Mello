<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //TODO: Maybe need A 'protected $fillable[]'
    protected $fillable = ['board_name'];
    /**
     * A board is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function columns()
    {
        return $this->hasMany('App\Column');
    }
}
