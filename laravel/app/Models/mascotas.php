<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mascotas
 * @package App\Models
 * @version May 16, 2019, 11:07 pm UTC
 *
 * @property string nombre
 * @property string raza
 * @property string edad
 * @property string creado_por
 */
class mascotas extends Model
{
    use SoftDeletes;

    public $table = 'mascotas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'raza',
        'edad',
        'creado_por'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'raza' => 'string',
        'edad' => 'string',
        'creado_por' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
