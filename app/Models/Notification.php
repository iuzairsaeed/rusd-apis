<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'user_id', 'title', 'body', 'click_action','data_id'
   ];

   public function getCreatedAtAttribute($value)
   {
       return time_elapsed_string($value);
   }

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function notifiable()
   {
       return $this->morphTo();
   }
}
