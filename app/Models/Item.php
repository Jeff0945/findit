<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'found_at',
        'characteristics',
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
    
    public function statuses(): HasMany
    {
        return $this->hasMany(Status::class, 'item_id');
    }
    
    public function status(): HasOne
    {
        return $this->hasOne(Status::class)->latestOfMany();
    }
    
    
    public function reportedBy(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'reported_by');
    }
    
    public function acknowledgedBy(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'acknowledged_by');
    }
    
    public function claimedBy(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'claimed_by');
    }
    
    public function releasedBy(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'released_by');
    }
    
    public function getReportedOnAttribute()
    {
        return Carbon::parse($this->reported_at)->format('D, d M Y H:i:s');
    }
    
    public function getStatusTextAttribute()
    {
        return ucfirst($this->status?->value);
    }
}
