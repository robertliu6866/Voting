<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    use HasFactory, Sluggable;
    //分頁常數設定值ideacontroller.php
    const PAGINATION_COUNT = 10;
protected $guarded = [];

public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

public function user(){
    return  $this->belongsTo(User::class) ;

}


}
