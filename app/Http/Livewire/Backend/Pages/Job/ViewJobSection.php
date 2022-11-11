<?php

namespace App\Http\Livewire\Backend\Pages\Job;

use App\Models\JobSection;
use Livewire\Component;

class ViewJobSection extends Component
{
    public $getJobsection;
    public function render()
    {
        $this->getJobsection =  JobSection::latest()->first();
        $this->trashdata= JobSection::onlyTrashed()->first();
        return view('livewire.backend.pages.job.view-job-section')->layout('layouts.backend');
    }


    public function  inactive($id){
        JobSection::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        JobSection::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Section status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        JobSection::destroy($id);
        $notification = array(
           'message' => 'Section Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }


       public function restore($id){
        JobSection::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Data Restored successfully',
           'alert-type' => 'Success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }
}
