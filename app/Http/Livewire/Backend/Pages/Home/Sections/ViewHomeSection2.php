<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionTwo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewHomeSection2 extends Component
{
    public $homeSectionTwo ,$trashdata;

    public function render()
    {
        $this->homeSectionTwo = HomeSectionTwo::first();
        $this->trashdata = HomeSectionTwo::onlyTrashed()->first();
        return view('livewire.backend.pages.home.sections.view-home-section2')->layout('layouts.backend');
    }
    public function  inactive($id){
        HomeSectionTwo::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
            HomeSectionTwo::where('id', $id)->update([
            'status' =>   1,
             ]);
            $notification = array(
                'message' => 'Section status is Active ',
                'alert-type' => 'success'
            );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
            HomeSectionTwo::destroy($id);
                $notification = array(
                'message' => 'Section Deleted successfully',
                'alert-type' => 'error'
                );
       return   redirect(request()->header('Referer'))->with($notification);
       }

       public function restore($id){
             HomeSectionTwo::withTrashed()->find($id)->restore();
                $notification = array(
                'message' => ' Data Restored successfully',
                'alert-type' => 'success'
            );
       return   redirect(request()->header('Referer'))->with($notification);
    }



    public function fulleDelete($id){
        $getimg  = HomeSectionTwo::onlyTrashed()->find($id);
        $imagePath = Storage::path('public/Home-section/'. $getimg->image);
        $imagePath2 = Storage::path('public/Home-section/'. $getimg->tablet_img);
        $imagePath3 = Storage::path('public/Home-section/'. $getimg->mobile_img);

       
        if(File::exists($imagePath) && isset( $getimg->image)){
            unlink($imagePath);
        }
        if(File::exists($imagePath2) && isset( $getimg->tablet_img)){
            unlink($imagePath2);
        }
        if(File::exists($imagePath3) && isset($getimg->mobile_img)){
            unlink($imagePath3);
        }
        HomeSectionTwo::onlyTrashed()->find($id)->forceDelete();
        $notification = array(
          'message' => ' section fully Deleted',
          'alert-type' => 'error'
      );
      return   redirect(request()->header('Referer'))->with($notification);
      }
}
