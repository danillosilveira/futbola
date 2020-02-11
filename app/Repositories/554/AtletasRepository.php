<?php

namespace App\Repositories\554;

use App\Models\554\Atletas;
use InfyOm\Generator\Common\BaseRepository;

class AtletasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Atletas::class;
    }
}
