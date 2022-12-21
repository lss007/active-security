<?php

namespace App\Http\Livewire\Backend\Pages\Navbar;

use App\Models\Navbar;
use App\Models\RouteNameList;
use App\Models\SubNavbar;
use Livewire\Component;

class AddSubNavbar extends Component
{
    public $getNavlink ,$navbarLink ,$routeName ,$getRoutelink ,$link;
    protected $rules = [
        'navbarLink'   => 'required',
        'routeName'    => 'required',
        'link'         => 'required |unique:sub_navbars,route_link',
    ];
    protected $messages = [
        'navbarLink.required' => 'Main Navbar link field is required.',
        'routeName.required' => 'Sublink Name field is required.',
        'link.unique' => 'Route link has already been taken.',
    ]; 

    public function SaveSubLinks(){
        $this->validate();
        $SaveSub = new SubNavbar();
        $SaveSub->navbar_id = $this->navbarLink;
        $SaveSub->route_name = $this->routeName;
        $SaveSub->route_link  = $this->link;
        $SaveSub->save();
        $notification = array(
            'message' => 'Sublink inserted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view_Subnavbar_list')->with($notification);

    }
    public function render()
    {
             $this->getNavlink =   Navbar::OrderBy('route_name')->get();
             $this->getRoutelink = RouteNameList::OrderBy('route_name')->get();
            return view('livewire.backend.pages.navbar.add-sub-navbar')->layout('layouts.backend');
    }

}
