<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    //TODO: Maybe need A 'protected $fillable[]'
    /**
     * A column is owned by a Board.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function board()
    {
        return $this->belongsTo('App\Board');
    }

}
