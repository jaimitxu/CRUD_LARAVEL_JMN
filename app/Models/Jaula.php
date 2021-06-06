<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jaula
 *
 * @property $id
 * @property $animal
 * @property $tamaño
 * @property $hábitat
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Jaula extends Model
{
    
    static $rules = [
		'animal' => 'required',
		'tamaño' => 'required',
		'hábitat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['animal','tamaño','hábitat'];



}
