<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {

    protected $fillable = ['name'];

    public function schools()
    {
        return $this->hasMany('App\School');
    }

}
