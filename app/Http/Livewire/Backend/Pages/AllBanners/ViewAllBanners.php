<?php

namespace App\Http\Livewire\Backend\Pages\AllBanners;

use App\Models\AllPagesBanner;
use Livewire\Component;
use Livewire\WithPagination;

class ViewAllBanners extends Component
{

    use WithPagination;
    public $search='' ;
    public function render()
    {

        $viewallBanner = AllPagesBanner::join('page_categories', 'all_pages_banners.cat_id','page_categories.id')
        ->select('all_pages_banners.*','page_categories.page_cat_name')->where('heading', 'like', '%'.$this->search.'%')->orWhere('title', 'LIKE', '%'.$this->search.'%')->paginate(10);
 
      
        $trashdata= AllPagesBanner::onlyTrashed()->paginate(3);
 
        return view('livewire.backend.pages.all-banners.view-all-banners',[
            'viewallBanners' => $viewallBanner, 'trashdatas' => $trashdata,
        ])->layout('layouts.backend');
    }

    public function deletebanner($id){
        
        AllPagesBanner::destroy($id);
        $notification = array(
           'message' => ' Banner Deleted successfully',
           'alert-type' => 'error'
       );
       return redirect()->route('view_all_banner')->with($notification);

       }
   
   
             public function  inactive($id){
                AllPagesBanner::where('id', $id)->update([
                   'status' =>    0,
               
               ]);
               $notification = array(
                  'message' => ' Banner status is Inactive',
                  'alert-type' => 'warning'
              );
              return redirect()->route('view_all_banner')->with($notification);

             }
             public function  active($id){
                AllPagesBanner::where('id', $id)->update([
                   'status' =>   1,
               
               ]);
               $notification = array(
                  'message' => ' Banner status is Active ',
                  'alert-type' => 'success'
              );
              return redirect()->route('view_all_banner')->with($notification);

   
             }
   
   
   
             public function restore($id){
                AllPagesBanner::withTrashed()->find($id)->restore();
               $notification = array(
                  'message' => ' Banner Restored',
                  'alert-type' => 'Success'
              );
              return redirect()->route('view_all_banner')->with($notification);

           }
   
   
           public function fulleDelete($id){
            AllPagesBanner::onlyTrashed()->find($id)->forceDelete();
               $notification = array(
                 'message' => ' Banner Deleted',
                 'alert-type' => 'error'
             );
             return redirect()->route('view_all_banner')->with($notification);

             }
}
