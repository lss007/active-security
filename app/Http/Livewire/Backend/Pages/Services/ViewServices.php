<?php

namespace App\Http\Livewire\Backend\Pages\Services;

use App\Models\ServicesPageSection;
use Livewire\Component;

class ViewServices extends Component
{
    public $get_services_sec;
    public function render()
    {
                $this->get_services_sec =  ServicesPageSection::
                join('page_categories' , 'services_page_sections.page_cat_id' ,'page_categories.id')
                ->select('services_page_sections.*','page_categories.page_cat_name')
                ->get();
        return view('livewire.backend.pages.services.view-services')->layout('layouts.backend');
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
                   'status' =>    0,
               
               ]);
               $notification = array(
                  'message' => 'Services  status is Inactive',
                  'alert-type' => 'warning'
              );
              return   redirect(request()->header('Referer'))->with($notification);
             }
             public function  active($id){
                ServicesPageSection::where('id', $id)->update([
                   'status' =>   1,
               
               ]);
               $notification = array(
                  'message' => 'Services status is Active ',
                  'alert-type' => 'success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
   
             }
}
