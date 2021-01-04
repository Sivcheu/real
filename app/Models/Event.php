<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $event = "events";
    protected $fillable=[
        'title',
        'description',
        'start',
        'end',
        'image'
    ];
    /**
     * @var mixed|string
     */

}
