<?php

namespace App\Http\Livewire\Backend\Pages\Banner;

use App\Models\HomeBanner as ModelsHomeBanner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function PHPUnit\Framework\fileExists;

class HomeBanner extends Component
{
    public $viewHomeBanner;

    public function render()
    {
        $this->viewHomeBanner = ModelsHomeBanner::get();
        $this->trashdata= ModelsHomeBanner::onlyTrashed()->get();
        return view('livewire.backend.pages.banner.home-banner')->layout('layouts.backend');
    }
    public function deletebanner($id){
             ModelsHomeBanner::destroy($id);
            $notification = array(
                'message' => 'Home Banner Deleted successfully',
                'alert-type' => 'error'
            );
            return   redirect(request()->header('Referer'))->with($notification);
    }


          public function  inactive($id){
            ModelsHomeBanner::where('id', $id)->update([
                'status' =>    0,
            
            ]);
            $notification = array(
               'message' => 'Home Banner status is Inactive',
               'alert-type' => 'warning'
           );
           return   redirect(request()->header('Referer'))->with($notification);
          }
          public function  active($id){
            ModelsHomeBanner::where('id', $id)->update([
                'status' =>   1,
            
            ]);
            $notification = array(
               'message' => 'Home Banner status is Active ',
               'alert-type' => 'success'
           );
           return   redirect(request()->header('Referer'))->with($notification);

          }



          public function restore($id){
            ModelsHomeBanner::withTrashed()->find($id)->restore();
            $notification = array(
               'message' => 'Home Banner Restored',
               'alert-type' => 'Success'
           );
           return   redirect(request()->header('Referer'))->with($notification);
        }


        public function fulleDelete($id){
            $getimg  = ModelsHomeBanner::onlyTrashed()->find($id);
            $imagePath = Storage::path('public/Home-banner/'. $getimg->banner_image);
            $imagePath2 = Storage::path('public/Home-banner/'. $getimg->tablet_banner);
            $imagePath3 = Storage::path('public/Home-banner/'. $getimg->mobile_banner);

           
            if(File::exists($imagePath) && isset( $getimg->banner_image)){
                unlink($imagePath);
            }
            if(File::exists($imagePath2) && isset( $getimg->tablet_banner)){
                unlink($imagePath2);
            }
            if(File::exists($imagePath3) && isset($getimg->mobile_banner)){
                unlink($imagePath3);
            }
            ModelsHomeBanner::onlyTrashed()->find($id)->forceDelete();
            $notification = array(
              'message' => 'Home Banner Deleted',
              'alert-type' => 'error'
          );
          return   redirect(request()->header('Referer'))->with($notification);
          }
}
