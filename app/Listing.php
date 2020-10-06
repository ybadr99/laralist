<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public $guarded = [];

    public function user()
    {
        return $this->blongsTo(User::class);
    }
}
