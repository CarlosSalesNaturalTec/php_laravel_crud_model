<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    use HasFactory;
    
    protected $table = 'consultas';
    protected $dates = ['data_consulta','created_at','updated_at'];

    protected $fillable = [
        'paciente_id',
        'data_consulta',
        'descricao',
    ];

    public function relPacientes()
    {
        return $this->hasOne('\App\Models\paciente','id','paciente_id');
    }
}
