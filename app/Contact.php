<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public static function search($query)
    {
        return $query
            ? static::where('name', 'like', "%{$query}%")->get()
            : (new static)->newCollection();
    }
}
