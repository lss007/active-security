<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionOne;
use Livewire\Component;

class ViewHomeSection1 extends Component
{
    public $homeSectionOne,$trashdata;
    public function render()
    {
        $this->homeSectionOne = HomeSectionOne::where('status',1)->first();
        $this->trashdata = HomeSectionOne::onlyTrashed()->first();
        return view('livewire.backend.pages.home.sections.view-home-section1')->layout('layouts.backend');
    }
    public function  inactive($id){
        HomeSectionOne::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        HomeSectionOne::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Section status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        HomeSectionOne::destroy($id);
        $notification = array(
           'message' => 'Section Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
       public function restore($id){
        HomeSectionOne::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Data Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
