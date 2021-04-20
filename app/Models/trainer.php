<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class trainer
 * @package App\Models
 * @version April 20, 2021, 11:28 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property string $firstname
 * @property string $Phone
 * @property string $PERSONID
 */
class trainer extends Model
{

    public $table = 'trainer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'Phone',
        'PERSONID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'Phone' => 'string',
        'PERSONID' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required|string|max:30',
        'Phone' => 'nullable|string|max:13',
        'PERSONID' => 'nullable|string|max:20'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'TRAINERID');
    }
}
