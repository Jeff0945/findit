<?php

namespace App\Models;

use App\Http\Requests\ItemRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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

    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class);
    }

    public function attachment(): HasOne
    {
        return $this->hasOne(Attachment::class)->latestOfMany();
    }

    public function statuses(): HasMany
    {
        return $this->hasMany(Status::class);
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
        if (is_null($this->reported_at)) {
            return '';
        }

        return Carbon::parse($this->reported_at, 'UTC')
            ->setTimezone('Asia/Manila')
            ->format('M d, Y H:i');
    }

    public function getReportedDateTimeAttribute()
    {
        if (is_null($this->reported_at)) {
            return '';
        }

        return Carbon::parse($this->reported_at, 'UTC')
            ->setTimezone('Asia/Manila')
            ->format('Y-m-d\TH:i');
    }

    public function getClaimedOnAttribute()
    {
        if (is_null($this->claimed_at)) {
            return '';
        }

        return Carbon::parse($this->claimed_at, 'UTC')
            ->setTimezone('Asia/Manila')
            ->format('M d, Y H:i');
    }

    public function getClaimedDateTimeAttribute()
    {
        if (is_null($this->claimed_at)) {
            return '';
        }

        return Carbon::parse($this->claimed_at, 'UTC')
            ->setTimezone('Asia/Manila')
            ->format('Y-m-d\TH:i');
    }

    public function getCreatedOnAttribute()
    {
        return Carbon::parse($this->created_at, 'UTC')
            ->setTimezone('Asia/Manila')
            ->format('M d, Y H:i');
    }

    public function getStatusTextAttribute()
    {
        return ucfirst($this->status?->value);
    }

    public function addStatus(ItemRequest $request): void
    {
        $oldValue = $this->status?->value;
        $newValue = $request->get('status');

        if ($oldValue !== $newValue) {
            $this->statuses()->create(['value' => $newValue]);
        }
    }

    public function addAttachment($file): void
    {
        $storage = config('filesystems.default');
        $path = Storage::disk($storage)->putFile('/', $file);

        Attachment::create([
            'item_id' => $this->id,
            'path' => $path
        ]);
    }
}
