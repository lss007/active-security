<?php

namespace App\Http\Livewire\Backend\Pages\Privacy;

use App\Models\PrivacyPageText;
use Livewire\Component;

class ViewFooterPrivacy extends Component
{
    public $viewPrivacyPageText;
    public function render()
    {
        $this->viewPrivacyPageText = PrivacyPageText::orderBy('created_at')->get();
            return view('livewire.backend.pages.privacy.view-footer-privacy')->layout('layouts.backend');
    }

    public function  inactive($id){
        PrivacyPageText::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Privacy  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        PrivacyPageText::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Privacy status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        PrivacyPageText::destroy($id);
        $notification = array(
           'message' => 'Privacy Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }


       public function restore($id){
        PrivacyPageText::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Privacy Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
