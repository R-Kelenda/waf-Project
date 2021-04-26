<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class orders
 * @package App\Models
 * @version April 23, 2021, 4:29 pm UTC
 *
 * @property \App\Models\Person $personid
 * @property \App\Models\Trainer $trainerid
 * @property integer $PERSONID
 * @property integer $TRAINERID
 * @property integer $OrderNumber
 * @property string $CustomerName
 * @property string $OrderDate
 */
class orders extends Model
{

    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'PERSONID',
        'TRAINERID',
        'OrderNumber',
        'CustomerName',
        'OrderDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'PERSONID' => 'integer',
        'TRAINERID' => 'integer',
        'OrderNumber' => 'integer',
        'CustomerName' => 'string',
        'OrderDate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'PERSONID' => 'nullable|integer',
        'TRAINERID' => 'nullable|integer',
        'OrderNumber' => 'required|integer',
        'CustomerName' => 'nullable|string|max:30',
        'OrderDate' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function personid()
    {
        return $this->belongsTo(\App\Models\Person::class, 'PERSONID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trainerid()
    {
        return $this->belongsTo(\App\Models\Trainer::class, 'TRAINERID');
    }
	public function __toString()
	{
		return "hello - orders";
	}
}
