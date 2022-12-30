<?php

namespace App\Http\Livewire\Backend\Pages\Navbar;

use App\Models\Navbar;
use App\Models\RouteNameList;
use Livewire\Component;

class AddNavbar extends Component
{
    public $getRouteNameList, $name, $link ,$order, $lastOrder;

    public function render()
    {
        $this->lastOrder = Navbar::orderBy('ordering','desc')->first();
        $this->getRouteNameList = RouteNameList::orderBy('route_name')->get();


        return view('livewire.backend.pages.navbar.add-navbar')->layout('layouts.backend');
    }
    protected $rules = [
        'name'         => 'required',
        'link'       => 'required|unique:navbars,route_link',
        'order'       => 'required|unique:navbars,ordering',

        

    ];
    protected $messages = [
        'name.required' => 'Route Name field is required.',
        'link.required' => 'Route Link  field is required.',
        'link.unique' => 'Route link has already been taken.',




       
    ]; 
        
      private function resetInputFields(){
        $this->name = '';
        $this->link = '';

 
    }
public function storeRouteName(){

        $this->validate();

            Navbar::create([
                'route_name' =>     $this->name ,
                'route_link' =>    $this->link,
                'ordering' =>  $this->order,
                ]);

                $notification = array(
                    'message' => 'Route inserted successfully',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_navbar_list')->with($notification);
    }

}
