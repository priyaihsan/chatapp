<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class, 'conversation_id');
    }

    public function messages():HasManyThrough
    {
        return $this->hasManyThrough(Message::class, Participant::class, 'conversation_id', 'user_id');
    }
}
