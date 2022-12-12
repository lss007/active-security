<?php

namespace App\Http\Livewire\Backend\Pages\Contacts;

use App\Models\ContactSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewContactSection extends Component
{
    public $fetchContactData;
    public function render()
    {
     $this->fetchContactData =    ContactSection::where('status',1)->first();
     $this->trashdata= ContactSection::onlyTrashed()->first();
        return view('livewire.backend.pages.contacts.view-contact-section')->layout('layouts.backend');
    }
    
    public function  inactive($id){
        ContactSection::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        ContactSection::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Section status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        ContactSection::destroy($id);
        $notification = array(
           'message' => 'Section Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }


       public function restore($id){
        ContactSection::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Data Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }

    public function fulleDelete($id){

        $getimg  = ContactSection::onlyTrashed()->find($id);
        $imagePath = Storage::path('public/Contact/'. $getimg->image);
        $imagePath2 = Storage::path('public/Contact/'. $getimg->tablet_img);
        $imagePath3 = Storage::path('public/Contact/'. $getimg->mobile_img);

       
        if(File::exists($imagePath) && $getimg->image){
        
            unlink($imagePath);
        }
        if(File::exists($imagePath2) && $getimg->tablet_img){
        
            unlink($imagePath2);
        }
        if(File::exists($imagePath3) && $getimg->mobile_img){
        
            unlink($imagePath3);
        }
        ContactSection::onlyTrashed()->find($id)->forceDelete();
      $notification = array(
        'message' => 'Section  Deleted successfully',
        'alert-type' => 'error'
    );
    return   redirect(request()->header('Referer'))->with($notification);
    }
}
