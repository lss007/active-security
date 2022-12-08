<?php

namespace App\Http\Livewire\Backend\Pages\AllBanners;

use App\Models\AllPagesBanner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ViewAllBanners extends Component
{

    use WithPagination;
    public   $search='' ;
    private  $viewallBanner;
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch()
    {
        $this->resetPage();
    }
 
    public function render()
    {

        $this->viewallBanner = AllPagesBanner::join('page_categories', 'all_pages_banners.cat_id','page_categories.id')
        ->select('all_pages_banners.*','page_categories.page_cat_name')
        ->where('heading', 'like', '%'.trim($this->search).'%')
        ->orWhere('title', 'like', '%'.trim($this->search).'%')->paginate(5);
        // ->when($this->search, fn ($query, $search) => $query->where('heading', 'like', '%' . $search . '%'))
      
        $trashdata= AllPagesBanner::onlyTrashed()->paginate(3);
 
        return view('livewire.backend.pages.all-banners.view-all-banners',[
            'viewallBanners' => $this->viewallBanner, 'trashdatas' => $trashdata,
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

            $getimg  = AllPagesBanner::onlyTrashed()->find($id);
            $imagePath = Storage::path('public/All-banner/'. $getimg->banner_image);
            $imagePath2 = Storage::path('public/All-banner/'. $getimg->tablet_banner);
            $imagePath3 = Storage::path('public/All-banner/'. $getimg->mobile_banner);

           
            if(File::exists($imagePath) && $getimg->banner_image){
            
                unlink($imagePath);
            }
            if(File::exists($imagePath2) && $getimg->tablet_banner){
            
                unlink($imagePath2);
            }
            if(File::exists($imagePath3) && $getimg->mobile_banner){
            
                unlink($imagePath3);
            }
            AllPagesBanner::onlyTrashed()->find($id)->forceDelete();
               $notification = array(
                 'message' => ' Banner Deleted',
                 'alert-type' => 'error'
             );
             return redirect()->route('view_all_banner')->with($notification);

             }
}
