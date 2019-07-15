<?php

namespace App\Repositories;

use App\Models\mascotas;
use App\Repositories\BaseRepository;

/**
 * Class mascotasRepository
 * @package App\Repositories
 * @version May 16, 2019, 11:07 pm UTC
*/

class mascotasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'raza',
        'edad',
        'creado_por'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mascotas::class;
    }
}
