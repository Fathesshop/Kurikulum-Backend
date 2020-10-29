<?php

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{

    protected $fillable = [
        'title', 'slug', 'body', 'subject_id',
    ];

    protected $with = [
        'subject', 'user',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function subject()
    {
        return $this->BelongsTo(Subject::class);
    }
}
