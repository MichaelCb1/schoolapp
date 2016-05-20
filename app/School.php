<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

    protected $fillable = ['name', 'phonenumber', 'website', 'address', 'town_id', 'region_id', 'url_small', 'url_big'];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
    public function zipcode()
    {
        return $this->belongsTo('App\Zipcode', 'town_id');
    }

}
