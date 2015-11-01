<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //TODO: Maybe need A 'protected $fillable[]'
    /**
     * A card is owned by a column.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function column()
    {
        return $this->belongsTo('App\Column');
    }

}
