<?php

namespace App\Http\Livewire\Backend\RoutesList;

use App\Models\RouteNameList;
use Livewire\Component;
use Livewire\WithPagination;

class ViewRouteList extends Component
{
    use WithPagination;
    public $getNameList ,$trashdata;
 

    public function  inactive($id){
        RouteNameList::where('id', $id)->update([
            'status' =>    0,
        
        ]);
        $notification = array(
           'message' => ' Route status is Inactive',
           'alert-type' => 'warning'
       );
       return   redirect(request()->header('Referer'))->with($notification);
      }
      public function  active($id){
        RouteNameList::where('id', $id)->update([
            'status' =>   1,
        
        ]);
        $notification = array(
           'message' => 'Route  status is Active ',
           'alert-type' => 'success'
       );
       return   redirect(request()->header('Referer'))->with($notification);

      }
    public function delete($id){
        // dd($this->id);
        RouteNameList::destroy($id);
       $notification = array(
           'message' => 'Deleted successfully',
           'alert-type' => 'error'
       );
       return redirect()->route('view_route_list')->with($notification);

    //    return   redirect(request()->header('Referer'))->with($notification);
}
    public function restore($id){
        RouteNameList::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => ' Route Restored successfully',
           'alert-type' => 'Success'
       );
       return   redirect(request()->header('Referer'))->with($notification);
    }
    public function fulleDelete($id){
        RouteNameList::onlyTrashed()->find($id)->forceDelete();
        $notification = array(
          'message' => ' Route Deleted successfully',
          'alert-type' => 'error'
      );
      return   redirect(request()->header('Referer'))->with($notification);
      }

      public function render()
      {
  
          $this->getNameList =   RouteNameList::get();

          $this->trashdata= RouteNameList::onlyTrashed()->get();
  
          return view('livewire.backend.routes-list.view-route-list')->layout('layouts.backend');
      }
}
