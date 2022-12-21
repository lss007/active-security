<?php

namespace App\Http\Livewire\Backend\Pages\Navbar;

use App\Models\Navbar;
use App\Models\RouteNameList;
use App\Models\SubNavbar;
use Livewire\Component;

class EditSubNavbar extends Component
{
    public $editNavlink ,$subLinkId;
    public $getNavlink ,$navbarLink ,$routeName ,$editRoutelink ,$link; 

    public function mount($id){
        $this->subLinkId= $id;
        $this->editNavlink = SubNavbar::where('id', $this->subLinkId)->first();
        if( $this->editNavlink != Null){
            $this->navbarLink =  $this->editNavlink->navbar_id; 
            $this->link =  $this->editNavlink->route_link ; 

            $this->routeName =  $this->editNavlink->route_name; 
        }
        else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_Subnavbar_list')->with($notification);
        }
     }
     protected $rules = [
        'navbarLink'  => 'required',
        'routeName'   => 'required',
        'link'       => 'required',
        // 'link'       => 'required|unique:sub_navbars,route_link,',
    ];
    protected $messages = [
        'navbarLink.required' => 'Main Navbar link field is required.',
        'routeName.required' => 'Sublink Name field is required.',
        // 'link.unique' => 'Route link has already been taken.',


    ]; 

        public function updateSubLinks()
            {
                    $this->validate();
                    $SaveSub =  SubNavbar::find($this->subLinkId);
                    $SaveSub->navbar_id = $this->navbarLink;
                    $SaveSub->route_name = $this->routeName;
                    $SaveSub->route_link  =  $this->link;

                    $SaveSub->save();
                    $notification = array(
                        'message' => 'Sublink inserted successfully',
                        'alert-type' => 'success'
                    );
            return redirect()->route('view_Subnavbar_list')->with($notification);

}

    public function render()
    {
        $this->editNavlink =   Navbar::OrderBy('route_name')->get();
        $this->editRoutelink = RouteNameList::OrderBy('route_name')->get();
        return view('livewire.backend.pages.navbar.edit-sub-navbar')->layout('layouts.backend');
    }
}
