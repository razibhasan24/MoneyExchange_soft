<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoneyStockAdjustmentType extends Model
{
    protected $fillable = ['name', 'description'];

    public $timestamps = false; // Disable timestamps

}