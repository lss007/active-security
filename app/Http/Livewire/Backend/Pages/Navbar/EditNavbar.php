<?php

namespace App\Http\Livewire\Backend\Pages\Navbar;

use App\Models\Navbar;
use App\Models\RouteNameList;
use Livewire\Component;

class EditNavbar extends Component
{
    public $getRouteNameList,$editNavRoute, $name, $link ,$order ,$lastOrder;
    public function render()
    {
        $this->lastOrder = Navbar::orderBy('ordering','desc')->first();

        $this->getRouteNameList = RouteNameList::orderBy('route_name')->get();

        return view('livewire.backend.pages.navbar.edit-navbar')->layout('layouts.backend');
    }
    public function mount($id){
        $this->routeId= $id;
        $this->editNavRoute = Navbar::where('id', $this->routeId)->first();
               
              
        if( $this->editNavRoute != Null){
            $this->name =  $this->editNavRoute->route_name; 
            $this->link =  $this->editNavRoute->route_link; 
            $this->order =  $this->editNavRoute->ordering; 

            
       

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
                // 'order'       => 'required|unique:navbars,ordering',


            ];
            protected $messages = [
                'name.required' => 'Route Name field is required.',
                // 'link.required' => 'Route Link  field is required.',
                // 'link.unique' => 'Route link has already been taken.',

            ]; 

            private function resetInputFields(){
                $this->name = '';
                $this->link = '';
                // $this->order = '';



            }
        public function updateRouteName(){
            // dd( $this->link);
            $this->validate();
            Navbar::where('id' ,$this->routeId)->update([
                'route_name' =>     $this->name ,
                'route_link' =>    $this->link,
                'ordering' =>  $this->order,
                ]);

                $notification = array(
                    'message' => 'Route Updated successfully',
                    'alert-type' => 'info'
                );
                return redirect()->route('view_navbar_list')->with($notification);
        }
}