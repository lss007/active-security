<?php

namespace App\Http\Livewire\Backend\Pages\Cookie;

use App\Models\Cookie;
use Livewire\Component;

class ViewCookie extends Component
{
    public $getcookies ,$trashdata;
    public function render()
    {
            $this->getcookies =    Cookie::latest()->where('status',1)->first();
            $this->trashdata= Cookie::onlyTrashed()->first();

            return view('livewire.backend.pages.cookie.view-cookie')->layout('layouts.backend');
    }
    public function delete($id){
            Cookie::destroy($id);
            $notification = array(
            'message' => 'Cookie Deleted successfully',
            'alert-type' => 'error'
        );
        return   redirect(request()->header('Referer'))->with($notification);
       }

    public function restore($id){
                Cookie::withTrashed()->find($id)->restore();
                $notification = array(
                'message' => ' Cookie Restored successfully',
                'alert-type' => 'success'
            );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
