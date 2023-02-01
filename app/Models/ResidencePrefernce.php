<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidencePrefernce extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'arrival_date',
        'departure_date',
        
       
    ];
    // protected $casts = [
    //     'departure_date' => 'datetime:Y-m-d H:00',
    //     'arrival_date' => 'datetime:Y-m-d H:00'
    // ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
