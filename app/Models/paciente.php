<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;

    protected $table='pacientes';
    protected $dates = ['nascimento','created_at','updated_at'];

    protected $fillable = [
        'nome',
        'cartao_sus',
        'nascimento',
    ];

    public function relConsultas(){
        return $this->hasMany('App\Models\consulta','paciente_id');
    }
}
