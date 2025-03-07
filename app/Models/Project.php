<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'photo', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
