<?php

namespace App\Http\Livewire\Backend\Pages\Agb;

use App\Models\Agbpage;
use Livewire\Component;

class ViewAgbPage extends Component
{
    public $agpPageText;
    public function render()
    {
        $this->agpPageText =  Agbpage::get();
        $this->trashdata= Agbpage::onlyTrashed()->get();
        return view('livewire.backend.pages.agb.view-agb-page')->layout('layouts.backend');
    }

    public function  inactive($id){
        Agbpage::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Agb  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        Agbpage::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Agb status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }


     public function delete($id){
        
        Agbpage::destroy($id);
        $notification = array(
           'message' => 'Agb Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }


       public function restore($id){
        Agbpage::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => 'Agb Restored successfully',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }

    public function fulleDelete($id){
        Agbpage::onlyTrashed()->find($id)->forceDelete();
        $notification = array(
          'message' => 'Agb Deleted successfully',
          'alert-type' => 'error'
      );
      return   redirect(request()->header('Referer'))->with($notification);
      }
}
