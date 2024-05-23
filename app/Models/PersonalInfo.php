<?php

namespace App\Models;

use App\Http\Requests\ItemRequest;
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
    
    public static function castClaimed(ItemRequest $request)
    {
        if (!is_numeric($request->get('claimed_by'))) {
            $claimedBy = self::create([
                'name'           => $request->get('claimed_by'),
                'id_number'      => $request->get('claimed_id_number'),
                'contact_number' => $request->get('claimed_contact_number')
            ]);
            
            return $claimedBy->id;
        }
        
        self::find($request->get('claimed_by'))->update([
                'id_number'      => $request->get('claimed_id_number'),
                'contact_number' => $request->get('claimed_contact_number')
            ]);
        
        return $request->get('claimed_by');
    }
    
    public static function castReported(ItemRequest $request)
    {
        if (!is_numeric($request->get('reported_by'))) {
            $reportedBy = self::create([
                'name'           => $request->get('reported_by'),
                'id_number'      => $request->get('reported_id_number'),
                'contact_number' => $request->get('reported_contact_number')
            ]);
            
            return $reportedBy->id;
        }
        
        self::find($request->get('reported_by'))->update([
                'id_number'      => $request->get('reported_id_number'),
                'contact_number' => $request->get('reported_contact_number')
            ]);
        
        return $request->get('reported_by');
    }
    
    public static function castReleased(ItemRequest $request)
    {
        if (!is_numeric($request->get('released_by'))) {
            $releasedBy = self::create([
                'name' => $request->get('released_by')
            ]);
            
            return $releasedBy->id;
        }
        
        return $request->get('released_by');
    }
    
    public static function castAcknowledged(ItemRequest $request)
    {
        if (!is_numeric($request->get('acknowledged_by'))) {
            $acknowledgedBy = self::create([
                'name' => $request->get('acknowledged_by')
            ]);
            
            return $acknowledgedBy->id;
        }
        
        return $request->get('acknowledged_by');
    }
}
