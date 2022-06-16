<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryBuyer extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'buyer_id'];
    public $timestamps = true;
}
