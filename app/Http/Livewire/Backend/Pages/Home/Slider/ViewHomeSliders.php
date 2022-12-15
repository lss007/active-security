<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use App\Models\HomeSectionSlider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ViewHomeSliders extends Component
{
    use WithPagination;

    public $trashdata ,$search='' ;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
       $viewHomeSlider = HomeSectionSlider::where('title', 'like', '%'.$this->search.'%')->paginate(6);
       $trashdata = HomeSectionSlider::onlyTrashed()->paginate(3);
        return view('livewire.backend.pages.home.slider.view-home-sliders',[
            'viewHomeSliders' => $viewHomeSlider, 'trashdatas' =>$trashdata,
        ])->layout('layouts.backend');

    }
    public function deleteSlider($id){
        // dd($this->id);
        $products = HomeSectionSlider::whereKey($this->id);
        $products->delete();
        HomeSectionSlider::destroy($id);
        $notification = array(
           'message' => 'Home Slider Trashed',
           'alert-type' => 'info'
       );
       return   redirect()->route('viewHomesliders')->with($notification);
    }

    // retore 
    public function restore($id){
        HomeSectionSlider::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => 'Home Slider Restored successfully',
           'alert-type' => 'Success'
       );
       return   redirect()->route('viewHomesliders')->with($notification);
    }

    public function fulleDelete($id){
        $getimg  = HomeSectionSlider::onlyTrashed()->find($id);
        $imagePath = Storage::path('public/Home-slider/'. $getimg->image);
        $imagePath2 = Storage::path('public/Home-slider/'. $getimg->tablet_img);
        $imagePath3 = Storage::path('public/Home-slider/'. $getimg->mobile_img);

       
        if(File::exists($imagePath) && isset( $getimg->image)){
            unlink($imagePath);
        }
        if(File::exists($imagePath2) && isset( $getimg->tablet_img)){
            unlink($imagePath2);
        }
        if(File::exists($imagePath3) && isset($getimg->mobile_img)){
            unlink($imagePath3);
        }
        $getimg  = HomeSectionSlider::onlyTrashed()->find($id);
        $imagePath = Storage::path('public/Home-slider/'. $getimg->image);
        if(File::exists($imagePath) && isset( $getimg->image)){
            // dd($imagePath);
            unlink($imagePath);
        }
      HomeSectionSlider::onlyTrashed()->find($id)->forceDelete();
      $notification = array(
        'message' => 'Home Slider Deleted successfully',
        'alert-type' => 'error'
    );
    return   redirect()->route('viewHomesliders')->with($notification);
    }

    public function  inactive($id){
        HomeSectionSlider::where('id', $id)->update([
                'status' =>    0,
            
            ]);
                 $notification = array(
                     'message' => 'Home slider status is Inactive',
                      'alert-type' => 'warning'
               );
            return   redirect()->route('viewHomesliders')->with($notification);
        }
    public function  active($id){
            HomeSectionSlider::where('id', $id)->update([
                'status' =>   1,
            
            ]);
                 $notification = array(
                    'message' => 'Home Slider status is Active ',
                    'alert-type' => 'success'
                );
        return   redirect()->route('viewHomesliders')->with($notification);

      }
}
