<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function post()
{
    return $this->hasOne('App\Models\Post');
}
public function role(){
    return $this->hasMany('App\Models\Role');
}
public function location(){
    return $this->belongsToMany('App\Models\Location','member_location');
}


    protected $fillable = [
        'name', 'email', 'address', 'pincode', 'mobile', 'gender', 'skills', 'course', 'password'
    ];

    public function getFormattedMobileAttribute()
    {
        return '+91 ' . $this->attributes['mobile'];
    }
    public function setnameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

}
