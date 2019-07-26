<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Appointment Model
 * @author Henry Rojas Douglas
 * @version 1.0.0
 * @license MIT
 * @package mcappointments
 */
class Appointment extends Model
{
    /**
     * Values to fill
     * @var
     * @since 1.0.0
     */
    protected $fillable = [
        'client',
        'phone',
        'appointment_at',
    ];
    /**
     * @since 1.0.0
     * @return Object
     */
    public function bike(){
        return $this->hasOne('App\Bike');
    }
}
