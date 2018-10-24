<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=['name','body','published_at'];
    public function getNameFormatedAttribute(){

        if(request()->has('search')){

            return str_replace(request('search'),'
            <mark>'.request('search').'
            </mark>',$this->attributes['name']);
        }
    }

    public function user(){


        return $this->belongsTo(User::class)->withDefault(); //article appartient à un user
    }
}
