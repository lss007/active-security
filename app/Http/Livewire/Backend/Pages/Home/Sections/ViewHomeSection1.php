<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionOne;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewHomeSection1 extends Component
{
    public $homeSectionOne,$trashdata;
    public function render()
    {
        $this->homeSectionOne = HomeSectionOne::first();
        $this->trashdata = HomeSectionOne::onlyTrashed()->first();
        return view('livewire.backend.pages.home.sections.view-home-section1')->layout('layouts.backend');
    }
    public function  inactive($id){
        HomeSectionOne::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        HomeSectionOne::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Section status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        HomeSectionOne::destroy($id);
        $notification = array(
           'message' => 'Section Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
       public function restore($id){
        HomeSectionOne::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Data Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }

    public function fulleDelete($id){
        $getimg  = HomeSectionOne::onlyTrashed()->find($id);
        $imagePath = Storage::path('public/Home-section/'. $getimg->main_image);
        $imagePath2 = Storage::path('public/Home-section/'. $getimg->tablet_img);
        $imagePath3 = Storage::path('public/Home-section/'. $getimg->mobile_img);

       
        if(File::exists($imagePath) && isset( $getimg->main_image)){
            unlink($imagePath);
        }
        if(File::exists($imagePath2) && isset( $getimg->tablet_img)){
            unlink($imagePath2);
        }
        if(File::exists($imagePath3) && isset($getimg->mobile_img)){
            unlink($imagePath3);
        }
        HomeSectionOne::onlyTrashed()->find($id)->forceDelete();
        $notification = array(
          'message' => 'Home section fully Deleted',
          'alert-type' => 'error'
      );
      return   redirect(request()->header('Referer'))->with($notification);
      }
}
