<?php

namespace App;
use TClass;
use Teacher;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Names;

class Attendance extends Model
{

	public $str=$this->class_name;
    public $table=$str;
    public $primaryKey='id';
    public $timestamps=false;
}
