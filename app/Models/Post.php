<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    /**
     * The primary key associated with the table
     * 
     * 
     * @var string
     */

    protected $primaryKey = 'id';

    /**
     * 
     * Get the user associated with the post
     * 
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function userLikes(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }


}
