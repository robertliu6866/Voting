<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilters extends Component
{
     public $status = 'All';
     protected $queryString = [
        'status',
     ];
     


     //這可以用於確保在不同的路由下，Livewire 組件的初始狀態是不同的，以滿足不同  的需求和用例。
     //在show頁面 $this->status = null; 空質
     public function  mount()
     {
        if(Route::currentRouteName() === 'idea.show'){
            $this->status = null;
            $this->queryString = [

            ];
        }
     } 

//在 status-filter.php wire:click.prevent="setStatus ('揪團中')"
//這一段setStatus 呼叫以下方法 

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;

        return redirect()->route('idea.index',[
            'status' => $this->status,
            
        ]);
        



    }

 public function render()
 {
    return view('livewire.status-filters');
 }



    public function  getPreviousRouteName() {

        return  app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();

    }
}
