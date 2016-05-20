<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model {

    protected $fillable = ['town', 'zipcode'];

    public function schools()
    {
        return $this->hasMany('App\School');
    }

    public function subscriptions()
    {
        return $this->hasMany('App\Subscription');
    }

}
