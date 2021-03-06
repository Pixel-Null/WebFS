<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    const UPDATED_AT = 'last_updated_at';

    protected $fillable = [
        'order_id',
        'course_id',
        'quantity',
        'price'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
