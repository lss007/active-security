<?php

namespace App\Http\Livewire\Backend\Pages\Navbar;

use App\Models\Navbar;
use Livewire\Component;
use Livewire\WithPagination;

class ViewNavbar extends Component
{
    use WithPagination;
    private $viewSiteNavbar ,$lastOrder;
    public   $search='' ,$selectedUser  = [] ,$trashdata ;
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        
        $this->lastOrder = Navbar::orderBy('ordering','desc')->first();

        $this->trashdata = Navbar::onlyTrashed()->orderBy('ordering','ASC')->get();
      $this->viewSiteNavbar =  Navbar::orderBy('ordering')->Where('route_name', 'like', '%'.trim($this->search).'%')->orderBy('ordering','ASC')->paginate(10);
        return view('livewire.backend.pages.navbar.view-navbar',[
            'viewSiteNavbar' => $this->viewSiteNavbar,
        ])->layout('layouts.backend');
        
    }

      public function updateTaskOrder($tasks){

              foreach ($tasks as $task) {
                Navbar::find($task['value'])->update(['ordering' => $task['order']]);
              }
    } 


    public function deleteSE(){
        // dd($this->selectedUser);
        $products = Navbar::whereKey($this->selectedUser);
        $products->delete();
    
        $notification = array(
        'message' => 'All Data Trashed',
        'alert-type' => 'error'
    );
    return   redirect()->route('view_navbar_list')->with($notification);

    }
        public function delete($id){
            // dd($this->id);
            $products = Navbar::whereKey($this->id);
            $products->delete();
            Navbar::destroy($id);
            $notification = array(
            'message' => ' Data Trashed',
            'alert-type' => 'info'
        );
        return   redirect()->route('view_navbar_list')->with($notification);
        }

// retore 
            public function restore($id){
                Navbar::withTrashed()->find($id)->restore();
                $notification = array(
                'message' => 'Data  Restored successfully',
                'alert-type' => 'Success'
            );
            return   redirect()->route('view_navbar_list')->with($notification);
            }





            public function fulleDelete($id){
       
                Navbar::onlyTrashed()->find($id)->forceDelete();
              $notification = array(
                'message' => 'Navbar  Deleted successfully',
                'alert-type' => 'error'
            );
            return   redirect()->route('view_navbar_list')->with($notification);
            }
        
            public function  inactive($id){
                Navbar::where('id', $id)->update([
                        'status' =>    0,
                    
                    ]);
                         $notification = array(
                             'message' => 'Navbar status is Inactive',
                              'alert-type' => 'warning'
                       );
                    return   redirect()->route('view_navbar_list')->with($notification);
                }
            public function  active($id){
                Navbar::where('id', $id)->update([
                        'status' =>   1,
                    
                    ]);
                         $notification = array(
                            'message' => 'Navbar  status is Active ',
                            'alert-type' => 'success'
                        );
                return   redirect()->route('view_navbar_list')->with($notification);
        
              }
}