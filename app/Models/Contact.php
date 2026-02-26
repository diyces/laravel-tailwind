<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];

    // Scope untuk pesan belum dibaca
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    // Scope untuk pesan sudah dibaca
    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }
}