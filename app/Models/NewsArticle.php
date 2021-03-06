<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    use HasFactory;

    const UPDATED_AT = 'last_updated_at';
    protected $dates = [
        'created_at',
        'last_updated_at',
        'deleted_at'
    ];

    protected $table = 'news';
    protected $primaryKey = 'id';
}
