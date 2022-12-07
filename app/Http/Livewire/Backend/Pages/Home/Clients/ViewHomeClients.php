<?php

namespace App\Http\Livewire\Backend\Pages\Home\Clients;

use App\Models\HomeClientLogo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class ViewHomeClients extends Component
{

    public function render()
    {
        $this->viewHomeClients = HomeClientLogo::get();
        $this->trashdata= HomeClientLogo::onlyTrashed()->get();

        return view('livewire.backend.pages.home.clients.view-home-clients')->layout('layouts.backend');
    }

   
    public function  inactive($id){
        HomeClientLogo::where('id', $id)->update([
            'status' =>    0,
        
        ]);
        $notification = array(
           'message' => 'Home client status is Inactive',
           'alert-type' => 'warning'
       );
       return   redirect(request()->header('Referer'))->with($notification);
      }
      public function  active($id){
        HomeClientLogo::where('id', $id)->update([
            'status' =>   1,
        
        ]);
        $notification = array(
           'message' => 'Home client status is Active ',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);

      }




      public function deleteclient($id){
        
        HomeClientLogo::destroy($id);
        $notification = array(
           'message' => 'Home Client Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }

       public function restore($id){
        HomeClientLogo::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Data Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }

    public function fulleDelete($id){
        $getimg  = HomeClientLogo::onlyTrashed()->find($id);
        $imagePath = Storage::path('public/Home-clients/'. $getimg->image);
        if(File::exists($imagePath)){
            // dd($imagePath);
 
            unlink($imagePath);
        }
        HomeClientLogo::onlyTrashed()->find($id)->forceDelete();
        $notification = array(
          'message' => 'Fully  Deleted successfully',
          'alert-type' => 'error'
      );
      return   redirect(request()->header('Referer'))->with($notification);
      }
}
