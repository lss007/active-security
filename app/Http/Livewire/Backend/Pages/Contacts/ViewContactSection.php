<?php

namespace App\Http\Livewire\Backend\Pages\Contacts;

use App\Models\ContactSection;
use Livewire\Component;

class ViewContactSection extends Component
{
    public $fetchContactData;
    public function render()
    {
     $this->fetchContactData =    ContactSection::first();
     $this->trashdata= ContactSection::onlyTrashed()->first();
        return view('livewire.backend.pages.contacts.view-contact-section')->layout('layouts.backend');
    }
    
    public function  inactive($id){
        ContactSection::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        ContactSection::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Section status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        ContactSection::destroy($id);
        $notification = array(
           'message' => 'Section Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }


       public function restore($id){
        ContactSection::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Data Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
