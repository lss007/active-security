<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionTwo;
use Livewire\Component;

class ViewHomeSection2 extends Component
{
    public $homeSectionTwo ,$trashdata;

    public function render()
    {
        $this->homeSectionTwo = HomeSectionTwo::where('status',1)->first();
        $this->trashdata = HomeSectionTwo::onlyTrashed()->first();
        return view('livewire.backend.pages.home.sections.view-home-section2')->layout('layouts.backend');
    }
    public function  inactive($id){
        HomeSectionTwo::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
            HomeSectionTwo::where('id', $id)->update([
            'status' =>   1,
             ]);
            $notification = array(
                'message' => 'Section status is Active ',
                'alert-type' => 'success'
            );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
            HomeSectionTwo::destroy($id);
                $notification = array(
                'message' => 'Section Deleted successfully',
                'alert-type' => 'error'
                );
       return   redirect(request()->header('Referer'))->with($notification);
       }

       public function restore($id){
             HomeSectionTwo::withTrashed()->find($id)->restore();
                $notification = array(
                'message' => ' Data Restored successfully',
                'alert-type' => 'success'
            );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
