<?php

namespace App\Repositories;

use App\Models\person;
use App\Repositories\BaseRepository;

/**
 * Class personRepository
 * @package App\Repositories
 * @version April 23, 2021, 4:30 pm UTC
*/

class personRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'PERSONID',
        'firstname',
        'surname',
        'Address',
        'Phone',
        'dateofbirth',
        'TRAINERID'
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
        return person::class;
    }
}
