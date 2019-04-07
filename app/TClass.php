<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TClass extends Model
{
    public $table='classes';
    public $primaryKey='id';
    public $timestamps=true;

    public function teacher()
    {
    	return $this->belongsTo('App\Teacher');
    }
}
