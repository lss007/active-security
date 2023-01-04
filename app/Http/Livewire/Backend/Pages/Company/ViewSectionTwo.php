<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\companySectionTwo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewSectionTwo extends Component
{
    public $getSectionData  ,$trashdata;
    public function render()
    {
         $this->getSectionData = companySectionTwo::latest()->get();
         $this->trashdata= companySectionTwo::onlyTrashed()->get();
        return view('livewire.backend.pages.company.view-section-two')->layout('layouts.backend');
    }
    public function delete($id){
        
        companySectionTwo::destroy($id);
        $notification = array(
           'message' => 'Section Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
             public function  inactive($id){
                companySectionTwo::where('id', $id)->update([
                   'status' =>    0,
               ]);
               $notification = array(
                  'message' => 'Section  status is Inactive',
                  'alert-type' => 'warning'
              );
              return   redirect(request()->header('Referer'))->with($notification);
             }
             public function  active($id){
                companySectionTwo::where('id', $id)->update([
                   'status' =>   1,
               
               ]);
               $notification = array(
                  'message' => 'Section status is Active ',
                  'alert-type' => 'success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
   
             }
             public function restore($id){
                companySectionTwo::withTrashed()->find($id)->restore();
                $notification = array(
                   'message' => 'Section  Restored successfully',
                   'alert-type' => 'Success'
               );
               return   redirect(request()->header('Referer'))->with($notification);
            }
        
            public function fulleDelete($id){

                $getimg  = companySectionTwo::onlyTrashed()->find($id);
                $imagePath = Storage::path('public/company-profile/'. $getimg->profile_img);
                $imagePath2 = Storage::path('public/company-profile/'. $getimg->tablet_banner);
                $imagePath3 = Storage::path('public/company-profile/'. $getimg->mobile_banner);
    
               
                if(File::exists($imagePath) && $getimg->profile_img){
                
                    unlink($imagePath);
                }
                if(File::exists($imagePath2) && $getimg->tablet_banner){
                
                    unlink($imagePath2);
                }
                if(File::exists($imagePath3) && $getimg->mobile_banner){
                
                    unlink($imagePath3);
                }
                companySectionTwo::onlyTrashed()->find($id)->forceDelete();
              $notification = array(
                'message' => 'Section  Deleted successfully',
                'alert-type' => 'error'
            );
            return   redirect(request()->header('Referer'))->with($notification);
            }
        



}
