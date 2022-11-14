<?php

namespace App\Http\Livewire\Backend\Pages\AllBanners;

use App\Models\AllPagesBanner;
use Livewire\Component;

class ViewAllBanners extends Component
{
    public $viewallBanner;
    public function render()
    {
        $this->viewallBanner = AllPagesBanner::join('page_categories', 'all_pages_banners.cat_id','page_categories.id')
        ->select('all_pages_banners.*','page_categories.page_cat_name')->get();
        $this->trashdata= AllPagesBanner::onlyTrashed()->get();
        return view('livewire.backend.pages.all-banners.view-all-banners')->layout('layouts.backend');
    }

    public function deletebanner($id){
        
        AllPagesBanner::destroy($id);
        $notification = array(
           'message' => ' Banner Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
   
   
             public function  inactive($id){
                AllPagesBanner::where('id', $id)->update([
                   'status' =>    0,
               
               ]);
               $notification = array(
                  'message' => ' Banner status is Inactive',
                  'alert-type' => 'warning'
              );
              return   redirect(request()->header('Referer'))->with($notification);
             }
             public function  active($id){
                AllPagesBanner::where('id', $id)->update([
                   'status' =>   1,
               
               ]);
               $notification = array(
                  'message' => ' Banner status is Active ',
                  'alert-type' => 'success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
   
             }
   
   
   
             public function restore($id){
                AllPagesBanner::withTrashed()->find($id)->restore();
               $notification = array(
                  'message' => ' Banner Restored',
                  'alert-type' => 'Success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
           }
   
   
           public function fulleDelete($id){
            AllPagesBanner::onlyTrashed()->find($id)->forceDelete();
               $notification = array(
                 'message' => ' Banner Deleted',
                 'alert-type' => 'error'
             );
             return   redirect(request()->header('Referer'))->with($notification);
             }
}
