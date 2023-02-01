<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nickname',
        'fatherName',
        'date_of_birth',
        'arrival_date',
        'personal_image',
        'passport_image',
        'proffession',
    ];
    // protected $casts = [
    //     'date_of_birth' => 'datetime:Y-m-d H:00',
    //     'arrival_date' => 'datetime:Y-m-d H:00'
    // ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
