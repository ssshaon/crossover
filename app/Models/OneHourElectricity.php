<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OneHourElectricity extends Model
{
    protected $fillable = ['panel_id', 'kilowatts', 'hour'];

    public static $fieldValidations = [
        'banel_id'  => 'required',
        'kilowatts' => 'required',
        'hour'      => 'required|unique:one_hour_electricities,hour,NULL,panel_id'
    ];
}
