<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ItemRequest extends FormRequest
{
    public function rules(): array
    {
        $imageMime   = 'mimes:jpeg,jpg,png,gif';
        $commonRules = [
            'name'                    => ['required'],
            'found_at'                => ['required'],
            'characteristics'         => ['required'],
            'status'                  => ['required'],
            'reported_by'             => ['nullable'],
            'reported_id_number'      => ['nullable'],
            'reported_contact_number' => ['nullable'],
            'reported_at'             => ['nullable'],
            'acknowledged_by'         => ['nullable'],
            'claimed_by'              => ['nullable'],
            'claimed_id_number'       => ['nullable'],
            'claimed_contact_number'  => ['nullable'],
            'claimed_at'              => ['nullable'],
            'released_by'             => ['nullable']
        ];

        return match ($this->method()) {
            'POST' => [
                'attachment' => ['required', $imageMime],
                ...$commonRules
            ],
            'PATCH' => [
                'attachment' => ['nullable', $imageMime],
                ...$commonRules
            ]
        };
    }

    public function authorize(): bool
    {
        return Auth::user()?->user_type === 'admin';
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'claimed_at'  => $this->toUTC($this->get('claimed_at')),
            'reported_at' => $this->toUTC($this->get('reported_at'))
        ]);
    }

    private function toUTC($dateTime): string
    {
        return Carbon::parse($dateTime, $this->_tz)
            ->setTimezone('UTC')
            ->format('Y-m-d H:i:s');
    }
}
