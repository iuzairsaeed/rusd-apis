<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\ModelStatus\HasStatuses;
use App\Models\Constant;

class Citizen extends Model
{
    use SoftDeletes, HasStatuses;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $hidden = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'step_no',
        'country',
        'nic',
        'expiry_date',
        'passport_no',
        'tax_payer',
        'tax_no',
        'net_income',
        'source_of_fund',
        'bank_deposit',
        'listed_stocks',
        'private_equities',
        'real_estate',
        'passport_scan',
        'nic_scan',
        'bill_scan',
    ];

    // public function getStatusAttribute()
    // {
    //     return $this->status()->name;
    // }

    public function getNicPicAttribute($value)
    {
        $path = nicPath();
        return ($value) ? file_exists($path.$value) ? $path.$value: $path.'no-image.png' : $path.'no-image.png';
    }
   
    public function getPassportPicAttribute($value)
    {
        $path = passportPath();
        return ($value) ? file_exists($path.$value) ? $path.$value: $path.'no-image.png' : $path.'no-image.png';
    }
    
    public function getBillPicAttribute($value)
    {
        $path = billPath();
        return ($value) ? file_exists($path.$value) ? $path.$value: $path.'no-image.png' : $path.'no-image.png';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
