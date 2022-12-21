<?php

namespace App\Http\Livewire\Backend\Pages\Job;

use App\Models\JobSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewJobSection extends Component
{
    public $getJobsection ,$trashdata;
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
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }

    public function fulleDelete($id){

        $getimg  = JobSection::onlyTrashed()->find($id);
     
        $imagePath = Storage::path('public/job/'. $getimg->image);
        $imagePath2 = Storage::path('public/job/'. $getimg->tablet_banner);
        $imagePath3 = Storage::path('public/job/'. $getimg->mobile_banner);

       
        if(File::exists($imagePath) && $getimg->image){
        
            unlink($imagePath);
        }
        if(File::exists($imagePath2) && $getimg->tablet_banner){
        
            unlink($imagePath2);
        }
        if(File::exists($imagePath3) && $getimg->mobile_banner){
        
            unlink($imagePath3);
        }
        JobSection::onlyTrashed()->find($id)->forceDelete();
      $notification = array(
        'message' => 'Section  Deleted successfully',
        'alert-type' => 'error'
    );
    return   redirect(request()->header('Referer'))->with($notification);
    }
}
