<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Vote;
use App\Models\Status;
use Livewire\Component;
use Livewire\Withpagination;

class IdeasIndex extends Component
{
  

    public function render()
    {
        $statuses = Status::all()->pluck('id','name');
        // dd($statuses);
        return view('livewire.ideas-index',[
            'ideas' =>  Idea::with('user', 'category', 'status')

                ->when(request()->status && request()->status !== 'All',function($query) use ($statuses)
                 {
                    return $query->where('status_id',$statuses->get(request()->status) );
                    //'status_id',$statuses->get(request()->status) 進行數據比對 撈資料！
                })

                ->addSelect(['voted_by_user' => Vote::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('idea_id', 'ideas.id')
                ])
                ->withCount('votes')
                ->orderBy('id', 'desc')
                ->simplePaginate(Idea::PAGINATION_COUNT),

        ]);

    }
}

 