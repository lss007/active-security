<?php

namespace App\Http\Livewire\Backend\Pages\Services\Section;

use App\Models\ServiceLastSection;
use Livewire\Component;

class ViewLastSection extends Component
{
    public  $getServices;
    public function render()
    {

                $this->getServices =  ServiceLastSection::get();
        return view('livewire.backend.pages.services.section.view-last-section')->layout('layouts.backend');
    }


    
    public function delete($id){
        
        ServiceLastSection::destroy($id);
        $notification = array(
           'message' => 'Services Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
   
   
             public function  inactive($id){
                ServiceLastSection::where('id', $id)->update([
                   'status' =>    0,
               
               ]);
               $notification = array(
                  'message' => 'Services  status is Inactive',
                  'alert-type' => 'warning'
              );
              return   redirect(request()->header('Referer'))->with($notification);
             }
             public function  active($id){
                ServiceLastSection::where('id', $id)->update([
                   'status' =>   1,
               
               ]);
               $notification = array(
                  'message' => 'Services status is Active ',
                  'alert-type' => 'success'
              );
              return   redirect(request()->header('Referer'))->with($notification);
   
             }
}
