<?php

namespace App\Repositories;

use App\Models\trainer;
use App\Repositories\BaseRepository;

/**
 * Class trainerRepository
 * @package App\Repositories
 * @version April 23, 2021, 4:31 pm UTC
*/

class trainerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'Phone',
        'PERSONID'
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
        return trainer::class;
    }
}
