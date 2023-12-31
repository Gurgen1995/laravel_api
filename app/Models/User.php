<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class User extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'avatar'
    ];

    public function comment(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class);
    }
}
