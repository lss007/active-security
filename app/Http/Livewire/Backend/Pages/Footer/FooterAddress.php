<?php

namespace App\Http\Livewire\Backend\Pages\Footer;

use App\Models\FooterContactAddress;
use Livewire\Component;

class FooterAddress extends Component
{
    public $contactAddress;
    public function render()
    {
      $this->contactAddress =  FooterContactAddress::first();
      $this->trashdata= FooterContactAddress::onlyTrashed()->first();
     
        return view('livewire.backend.pages.footer.footer-address')->layout('layouts.backend');
    }

    public function  inactive($id){
      FooterContactAddress::where('id', $id)->update([
         'status' =>    0,
     ]);
     $notification = array(
        'message' => 'Contact  status is Inactive',
        'alert-type' => 'warning'
    );
    return   redirect(request()->header('Referer'))->with($notification);
   }
   public function  active($id){
    FooterContactAddress::where('id', $id)->update([
         'status' =>   1,
     
     ]);
     $notification = array(
        'message' => 'Contact status is Active ',
        'alert-type' => 'success'
    );
    return   redirect(request()->header('Referer'))->with($notification);

   }


   public function delete($id){
      
    FooterContactAddress::destroy($id);
      $notification = array(
         'message' => 'Contact Deleted successfully',
         'alert-type' => 'error'
     );
     return   redirect(request()->header('Referer'))->with($notification);
     }


     public function restore($id){
      FooterContactAddress::withTrashed()->find($id)->restore();
      $notification = array(
         'message' => ' Contact Restored successfully',
         'alert-type' => 'success'
     );
     return   redirect(request()->header('Referer'))->with($notification);
  }
}
