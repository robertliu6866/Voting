<?php

namespace App\Models;
use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model

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

 

  public function isVotedByUser(?User $user)
  {
      if (!$user) {
          return false;
      }

      return Vote::where('user_id', $user->id)
      ->where('idea_id', $this->id)
      ->exists();
    }
    // 这个条件表示要筛选 user_id 与 $user->id 相等
    //这是为了确保查询只会选择与特定用户和特定想法相关联的投票记录


 public function  vote(User $user)
 {
    Vote::create([
        'idea_id' => $this->id,
        'user_id' => $user->id,
    ]);
 }




 public function  removeVote(User $user)
 {
    Vote::where('idea_id',$this->id)
    ->where('user_id',$user->id)
    ->first()
    ->delete();
    
 }

}
