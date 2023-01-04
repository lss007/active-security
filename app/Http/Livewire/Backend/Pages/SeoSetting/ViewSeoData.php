<?php

namespace App\Http\Livewire\Backend\Pages\SeoSetting;

use App\Models\SeoSetting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewSeoData extends Component
{
    public $getSeoData;
    public function render()
    {
      $this->getSeoData =   SeoSetting::first();
        return view('livewire.backend.pages.seo-setting.view-seo-data')->layout('layouts.backend');
    }

    public function  inactive($id){
        SeoSetting::where('id', $id)->update([
           'status' => 0,
       ]);
       $notification = array(
          'message' => 'status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        SeoSetting::where('id', $id)->update([
           'status' => 1,
       
       ]);
       $notification = array(
          'message' => 'status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }

     public function delete($id){
        $getimg  = SeoSetting::find($id);
        $imagePath = Storage::path('public/meta/'. $getimg->og_image);
        if(File::exists($imagePath) && $getimg->og_image){
            unlink($imagePath);
        }
        SeoSetting::destroy($id);
        $notification = array(
           'message' => 'Data Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
}
