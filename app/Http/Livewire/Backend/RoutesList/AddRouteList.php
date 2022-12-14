<?php

namespace App\Http\Livewire\Backend\RoutesList;

use App\Models\RouteNameList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddRouteList extends Component
{
    public $RouteName , $RouteLink;
    public function render()
    {
        return view('livewire.backend.routes-list.add-route-list')->layout('layouts.backend');
    }
public function mount(){
    // Auth::user()->role_id === 3?:abort(404);

    
    if(Auth::user()->role_id != 3){
        $notification = array(
            'message' => 'Access denied',
            'alert-type' => 'error'
        );
            return redirect()->route('view_route_list')->with($notification);
         
    }
  

}
    protected $rules = [
      
        'RouteName' => 'required',
        'RouteLink' => 'required',
     

    ];

   private function resetInputFields(){
       $this->RouteName = '';
        $this->RouteLink = '';
      
        }

        public function storerouteName(){
            $this->validate();

                RouteNameList::create([
                    'route_name' =>    $this->RouteName,
                    'route_link' =>    trim($this->RouteLink),
                ]);
                $notification = array(
                    'message' => 'Route published successfully',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_route_list')->with($notification);
        }
}
