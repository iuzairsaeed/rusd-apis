<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'country' => $this->country,
            'dob' => $this->dob,
            'gender' => $this->gender,
            'address' => $this->address,
            'street' => $this->street,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'status_warning' => $this->status,
            'refresh_token' => $this->refresh_token,
            'biometric' => $this->biometric,
            'two_factor' => $this->two_factor,
            'step' => $this->step,
        ];
        return parent::toArray($request);
    }
}
