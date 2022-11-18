<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Social;

use App\Models\SociaCategory;
use Livewire\Component;

class ViewSocialCategory extends Component
{
    public $getSocial_category ;
    public function render()
    {

        $this->getSocial_category = SociaCategory::orderBy('name')->get();

        return view('livewire.backend.pages.footer.social.view-social-category')->layout('layouts.backend');
    }
    public function delete($id){
        
        SociaCategory::destroy($id);
        $notification = array(
           'message' => 'Social category  Deleted',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
   
   
             public function  inactive($id){
                SociaCategory::where('id', $id)->update([
                   'status' =>    0,
               
               ]);
               $notification = array(
                  'message' => 'Social category  is Inactive',
                  'alert-type' => 'warning'
              );
              return   redirect(request()->header('Referer'))->with($notification);
             }
             public function  active($id){
                SociaCategory::where('id', $id)->update([
                   'status' =>   1,
               
               ]);
               $notification = array(
                  'message' => 'Social  category status is Active ',
                  'alert-type' => 'success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
   
             }
}
