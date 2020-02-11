<?php

namespace App\Models\554;

use Illuminate\Database\Eloquent\Model;



class Atletas extends Model
{

    public $table = 'atletass';
    

    protected $primaryKey = 'nome';

    public $fillable = [
        'sobre_nome',
        'idade',
        'tipo_sanguineo',
        'data_de_nascimento',
        'c_p_f',
        'r_g',
        'grau_ensino',
        'instituicao',
        'ala'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sobre_nome' => 'string',
        'idade' => 'string',
        'tipo_sanguineo' => 'string',
        'c_p_f' => 'string',
        'r_g' => 'string',
        'grau_ensino' => 'string',
        'instituicao' => 'string',
        'ala' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
