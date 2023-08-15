<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;

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

public function category()
{
    return $this->belongsTo(Category::class);

}

public function status()
{
    return $this->belongsTo(Status::class);
}

public function votes(){
   
    return $this->belongsToMany(User::class,'votes');
    
  }



}
