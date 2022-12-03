<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionFive;
use Livewire\Component;

class ViewHomeSection5 extends Component
{
    public $homeSectionfive ;
    public function render()
    {
        $this->homeSectionfive = HomeSectionFive::where('status',1)->first();
        $this->trashdata = HomeSectionFive::onlyTrashed()->first();
        return view('livewire.backend.pages.home.sections.view-home-section5')->layout('layouts.backend');
    }
    public function  inactive($id){
        HomeSectionFive::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        HomeSectionFive::where('id', $id)->update([
            'status' =>   1,
             ]);
            $notification = array(
                'message' => 'Section status is Active ',
                'alert-type' => 'success'
            );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        HomeSectionFive::destroy($id);
                $notification = array(
                'message' => 'Section Deleted successfully',
                'alert-type' => 'error'
                );
       return   redirect(request()->header('Referer'))->with($notification);
       }

       public function restore($id){
        HomeSectionFive::withTrashed()->find($id)->restore();
                $notification = array(
                'message' => ' Data Restored successfully',
                'alert-type' => 'success'
            );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
