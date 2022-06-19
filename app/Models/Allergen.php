<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    protected $table = 'allergens';
    protected $primaryKey = 'allergen';
    public $keyType = 'string';
}
