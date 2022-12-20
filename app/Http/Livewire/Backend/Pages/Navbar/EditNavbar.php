<?php

namespace App\Http\Livewire\Backend\Pages\Navbar;

use App\Models\Navbar;
use App\Models\RouteNameList;
use Livewire\Component;

class EditNavbar extends Component
{
    public $getRouteNameList,$editNavRoute, $name, $link;
    public function render()
    {
        $this->getRouteNameList = RouteNameList::get();
        return view('livewire.backend.pages.navbar.edit-navbar')->layout('layouts.backend');
    }
    public function mount($id){
        $this->routeId= $id;
        $this->editNavRoute = Navbar::where('id', $this->routeId)->first();
        if( $this->editNavRoute != Null){
            $this->name =  $this->editNavRoute->route_name; 
            $this->link =  $this->editNavRoute->route_link; 
        }
        else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_navbar_list')->with($notification);
        }
     }
            protected $rules = [
                'name'         => 'required',
                // 'link'       => 'required|unique:navbars,route_link,',

            ];
            protected $messages = [
                'name.required' => 'Route Name field is required.',
                // 'link.required' => 'Route Link  field is required.',
                // 'link.unique' => 'Route link has already been taken.',

            ]; 

            private function resetInputFields(){
                $this->name = '';
                // $this->link = '';


            }
        public function updateRouteName(){
            $this->validate();
            Navbar::where('id' ,$this->routeId)->update([
                'route_name' =>     $this->name ,
                // 'route_link' =>    $this->link,
                ]);

                $notification = array(
                    'message' => 'Route Updated successfully',
                    'alert-type' => 'info'
                );
                return redirect()->route('view_navbar_list')->with($notification);
        }
}