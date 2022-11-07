<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use App\Models\HomeSectionSlider;
use Livewire\Component;

class ViewHomeSliders extends Component
{
    public $trashdata , $viewHomeSlider;
    public function render()
    {
        $this->viewHomeSlider = HomeSectionSlider::get();

       $this->trashdata= HomeSectionSlider::onlyTrashed()->get();

        return view('livewire.backend.pages.home.slider.view-home-sliders')->layout('layouts.backend');
    }
    public function deleteSlider($id){
        HomeSectionSlider::destroy($id);
        $notification = array(
           'message' => 'Home Slider Trashed',
           'alert-type' => 'info'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }

    // retore 
    public function restore($id){
        HomeSectionSlider::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => 'Home Slider Restored successfully',
           'alert-type' => 'Success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }

    public function fulleDelete($id){
      HomeSectionSlider::onlyTrashed()->find($id)->forceDelete();
      $notification = array(
        'message' => 'Home Slider Deleted successfully',
        'alert-type' => 'error'
    );
    return   redirect(request()->header('Referer'))->with($notification);
    }

    public function  inactive($id){
        HomeSectionSlider::where('id', $id)->update([
            'status' =>    0,
        
        ]);
        $notification = array(
           'message' => 'Home slider status is Inactive',
           'alert-type' => 'warning'
       );
       return   redirect(request()->header('Referer'))->with($notification);
      }
      public function  active($id){
        HomeSectionSlider::where('id', $id)->update([
            'status' =>   1,
        
        ]);
        $notification = array(
           'message' => 'Home Slider status is Active ',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);

      }
}
