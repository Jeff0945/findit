<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'path',
        'item_id',
    ];
    
    public function getFileAttribute()
    {
        if (filter_var($this->path, FILTER_VALIDATE_URL)) {
            return $this->path;
        }
        
        $storage = config('filesystems.default');
        
        return Storage::disk($storage)->get($this->path);
    }
    
    public function getUrlAttribute()
    {
        return filter_var($this->path, FILTER_VALIDATE_URL)
            ? $this->path
            : route('attachments.show', $this);
    }
}
