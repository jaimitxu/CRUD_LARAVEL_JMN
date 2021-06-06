<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuidadore
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $edad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cuidadore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'edad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','edad'];



}
