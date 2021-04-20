<?php

namespace App\Repositories;

use App\Models\orders;
use App\Repositories\BaseRepository;

/**
 * Class ordersRepository
 * @package App\Repositories
 * @version April 20, 2021, 11:27 am UTC
*/

class ordersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'PERSONID',
        'TRAINERID',
        'OrderNumber',
        'CustomerName',
        'OrderDate'
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
        return orders::class;
    }
}
