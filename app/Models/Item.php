<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = ['brand', 'name', 'expired_date', 'supplier','description'];
}
