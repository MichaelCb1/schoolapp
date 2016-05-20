<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrydate extends Model {

    protected $fillable = ['birthday', 'entrydate'];

    public function subscriptions()
    {
        return $this->hasMany('App\Subscription');
    }

}
