<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $dateFormat = 'Y-m-d H:i:s';
    protected $guarded = ["id"];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }


}
