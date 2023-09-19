<?php

namespace App\Http\Livewire;
use Illuminate\Http\Response;
use Livewire\Component;
use App\Models\Category;
use App\Models\Idea;

class CreateIdea extends Component
{
    public $title;
    public $category = 1;
    public $description;

    protected  $rules =[
    'title' => 'required',
    'category' => 'required|integer',
    'description' => 'required|min:4',

    ];
    public function createIdea()
    {
        if(auth()->check()){
            $this->validate();

            idea::create([
                'user_id' => auth()->id(),
                'category_id' => $this->category,
                'status_id' => 1,
                'title' => $this->title,
                'description' => $this->description,
                
            ]);
              session()->flash('success_message', '太好了活動新增成功！');
              $this->reset();

              return redirect()->route('idea.index');
            }
            
            abort(Response::HTTP_FORBIDDEN);
}


    public function render()
    {
        return view('livewire.create-idea',[
            'categories' => Category::all(),
        ]);
    }
}
