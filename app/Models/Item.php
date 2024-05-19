<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'found_at',
        'characteristics',
        'status',
        'reported_by',
        'reported_at',
        'acknowledged_by',
        'claimed_by',
        'claimed_at',
        'released_by',
        'created_by',
    ];
    
    public function attachment(): HasOne
    {
        return $this->hasOne(Attachment::class, 'item_id');
    }
    
    public function getStatusTextAttribute()
    {
        return ucfirst($this->status);
    }
}
