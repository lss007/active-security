<?php

namespace App\Http\Livewire\Backend\Pages\Services;

use App\Models\ServicesPageSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ViewServices extends Component
{
    use WithPagination;
    public  $trashdata,  $search='' ;
    private $get_services_sec;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }
  
    public function render()
    {
                $this->get_services_sec =  ServicesPageSection::
                join('page_categories','services_page_sections.page_cat_id' ,'page_categories.id')
                ->select('services_page_sections.*','page_categories.page_cat_name')
                 ->where('heading', 'like', '%'.trim($this->search).'%')
                ->orWhere('page_cat_name', 'like', '%'.trim($this->search).'%')
                ->orWhere('title', 'like', '%'.trim($this->search).'%')

                ->paginate(5);
                $this->trashdata = ServicesPageSection::onlyTrashed()->get();
              
              
        return view('livewire.backend.pages.services.view-services',['get_services_sec' => $this->get_services_sec,])->layout('layouts.backend');
    }

    
    public function delete($id){
        
        ServicesPageSection::destroy($id);
        $notification = array(
           'message' => 'Services Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
   
   
    public function  inactive($id){
                ServicesPageSection::where('id', $id)->update([
                   'status' =>    0, ]);
               $notification = array(
                  'message' => 'Services  status is Inactive',
                  'alert-type' => 'warning'
              );
              return   redirect(request()->header('Referer'))->with($notification);
             }
    public function  active($id){
                ServicesPageSection::where('id', $id)->update([
                   'status' =>   1,  ]);
               $notification = array(
                  'message' => 'Services status is Active ',
                  'alert-type' => 'success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
   
             }
// ============================= Delete or restore = ========================

        public function restore($id){
            ServicesPageSection::withTrashed()->find($id)->restore();
            $notification = array(
            'message' => 'Section  Restored',
            'alert-type' => 'Success'
        );
        return   redirect(request()->header('Referer'))->with($notification);
        }


    public function fulleDelete($id){
            $getimg  = ServicesPageSection::onlyTrashed()->find($id);
            $imagePath = Storage::path('public/services-section/'. $getimg->sec_image);
      
            $imagePath2 = Storage::path('public/services-section/'. $getimg->tablet_banner);
            $imagePath3 = Storage::path('public/services-section/'. $getimg->mobile_banner);

        
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            if(File::exists($imagePath2)){
                unlink($imagePath2);
            }
            if(File::exists($imagePath3)){
                unlink($imagePath3);
            }
            ServicesPageSection::onlyTrashed()->find($id)->forceDelete();
                    $notification = array(
                    'message' => 'Section Deleted',
                    'alert-type' => 'error'
                );
  return   redirect(request()->header('Referer'))->with($notification);
  }
}
