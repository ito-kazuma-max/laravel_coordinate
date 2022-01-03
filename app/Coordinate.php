<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $fillable = ['madeUser_id', 'madeUser_name', 'user_id', 'tops_id', 'bottoms_id', 'shoes_id', 'outer_id', 'bag_id', 'title', 'description'];

    public function tops()
    {
        return $this->belongsTo(Item::class);
    }

    public function bottoms()
    {
        return $this->belongsTo(Item::class);
    }

    public function shoes()
    {
        return $this->belongsTo(Item::class);
    }

    public function outer()
    {
        return $this->belongsTo(Item::class);
    }

    public function bag()
    {
        return $this->belongsTo(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
