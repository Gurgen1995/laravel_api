<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'company_id',
        'content',
        'grades'
    ];

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function company(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }

    public function rating(): BelongsToMany
    {
        return $this->belongsToMany(Rating::class);
    }

}
