<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Social;

use App\Models\SocialLinks;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewSocialMedia extends Component
{
    public $getSocial,$trashdata;
    public function render()
    {

     $this->getSocial =   SocialLinks::get();
     $this->trashdata= SocialLinks::onlyTrashed()->get();

        return view('livewire.backend.pages.footer.social.view-social-media')->layout('layouts.backend');
    }
    public function deletebanner($id){
        
        SocialLinks::destroy($id);
        $notification = array(
           'message' => 'Social Link Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
   
   
             public function  inactive($id){
                SocialLinks::where('id', $id)->update([
                   'status' =>    0,
               
               ]);
               $notification = array(
                  'message' => 'Social Link status is Inactive',
                  'alert-type' => 'warning'
              );
              return   redirect(request()->header('Referer'))->with($notification);
             }
             public function  active($id){
                SocialLinks::where('id', $id)->update([
                   'status' =>   1,
               
               ]);
               $notification = array(
                  'message' => 'Social Link status is Active ',
                  'alert-type' => 'success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
   
             }

             public function restore($id){
                SocialLinks::withTrashed()->find($id)->restore();
                $notification = array(
                   'message' => ' Link Restored successfully',
                   'alert-type' => 'Success'
               );
               return   redirect(request()->header('Referer'))->with($notification);
            }

            public function fulleDelete($id){

                $getimg  = SocialLinks::onlyTrashed()->find($id);
                $imagePath = Storage::path('public/social-logo/'. $getimg->logo);
               
               
                if(File::exists($imagePath) && $getimg->logo){
                
                    unlink($imagePath);
                }
           
                SocialLinks::onlyTrashed()->find($id)->forceDelete();
              $notification = array(
                'message' => 'Link Deleted successfully',
                'alert-type' => 'error'
            );
            return   redirect(request()->header('Referer'))->with($notification);
            }
}
