<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use HasFactory;
    use Notifiable;

    protected $guarded = [];

    public function publisherUser()
    {
        return $this->belongsTo(User::class, 'publisher', 'id');
    }
}
