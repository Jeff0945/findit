<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes, HasFactory;
    
    protected $fillable = ['item_id', 'value'];
    
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
