<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy;

use App\Models\PrivacySetting;
use App\Models\PrivacySettingTab;
use Livewire\Component;

class ViewPrivacySettings extends Component
{
    public $getPrivacy ,$trashdata ,$privacyTab;
    public function render()
    {
            $this->getPrivacy =   PrivacySetting::first();
  
            $this->trashdata = PrivacySetting::onlyTrashed()->first();
       
        return view('livewire.backend.pages.footer.privacy.view-privacy-settings')->layout('layouts.backend');
    }

    public function  inactive($id){
        PrivacySetting::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Privacy Setting  Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        PrivacySetting::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Privacy Setting Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        PrivacySetting::destroy($id);
        $notification = array(
           'message' => 'Privacy Setting Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }


       public function restore($id){
        PrivacySetting::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => 'Privacy Setting Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
