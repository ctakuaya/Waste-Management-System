<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'location_name',
         'latitude', 
         'longitude'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
