<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = "messages";

    protected $guarded = ["id"];

    public function Chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
