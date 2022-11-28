<?php

namespace App\Http\Livewire\Backend\RoutesList;

use App\Models\RouteNameList;
use Livewire\Component;

class EditRouteList extends Component
{

    public $RouteName , $RouteLink ,$editRouteId ,$editroute;
    public function render()
    {
        return view('livewire.backend.routes-list.edit-route-list')->layout('layouts.backend');
    }
    protected $rules = [
      
        'RouteName' => 'required',
        'RouteLink' => 'required',
     

    ];
    public function mount($id){

        $this->editRouteId= $id;
        $this->editroute = RouteNameList::where('id', $this->editRouteId)->first();
        if($this->editroute){
            $this->RouteName  =  $this->editroute->route_name;
            $this->RouteLink  =  $this->editroute->route_link;
         
        }
         
       
    }
    
    public function updateRouteName(){
        $this->validate();

            RouteNameList::where('id',$this->editRouteId)->update([
                'route_name' =>    $this->RouteName,
                'route_link' =>    trim($this->RouteLink),
            ]);
            $notification = array(
                'message' => 'Route Updated successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('view_route_list')->with($notification);
    }
}
