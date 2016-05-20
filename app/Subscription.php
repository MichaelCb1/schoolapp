<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model {

    protected $fillable = ['parent_firstname', 'parent_lastname', 'email', 'child_firstname', 'child_lastname', 'birthday', 'school_id'];

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function entrydate()
    {
        return $this->belongsTo('App\Entrydate');
    }

    public function zipcode()
    {
        return $this->belongsTo('App\Zipcode');
    }
}