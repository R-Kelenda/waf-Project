<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class person
 * @package App\Models
 * @version April 23, 2021, 4:30 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property integer $PERSONID
 * @property string $firstname
 * @property string $surname
 * @property string $Address
 * @property string $Phone
 * @property string $dateofbirth
 * @property integer $TRAINERID
 */
class person extends Model
{

    public $table = 'person';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'PERSONID',
        'firstname',
        'surname',
        'Address',
        'Phone',
        'dateofbirth',
        'TRAINERID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'PERSONID' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'Address' => 'string',
        'Phone' => 'string',
        'dateofbirth' => 'date',
        'TRAINERID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'PERSONID' => 'nullable|integer',
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'Address' => 'nullable|string|max:30',
        'Phone' => 'nullable|string|max:13',
        'dateofbirth' => 'nullable',
        'TRAINERID' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'PERSONID');
    }
	public function __toString()
	{
		return $this->firstname ." " . $this->surname;
	}
	public function user()
    {
        return $this->belongsTo(\App\User::class,'userid','id');
    }
}
