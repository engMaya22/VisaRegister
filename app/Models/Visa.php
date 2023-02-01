<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
    public function fillViza($data,$personal_destination,$passport_destination ){
        $this->fill([
            'nickname' => $data->nickname,
            'fatherName' => $data->fatherName,
            'date_of_birth'=> $data->date_of_birth,
            'arrival_date'=> $data->arrival_date,
            'proffession'=> $data->proffession,
            'personal_image' =>$personal_destination,
            'passport_image' =>$passport_destination,
        ]);

    }
}
