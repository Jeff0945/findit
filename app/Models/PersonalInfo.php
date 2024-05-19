<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalInfo extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'id_number',
        'contact_number',
    ];
    
    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'claimed_by');
    }
}
