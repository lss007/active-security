<?php

namespace App\Http\Livewire\Backend\Pages\Navbar;

use App\Models\SubNavbar;
use Livewire\Component;
use Livewire\WithPagination;

class ViewSubNavbar extends Component
{

    use WithPagination;
    private $viewSubLink;
    public   $search='' ,$selectedsub  = [] ,$trashdata ;
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {

        $this->trashdata = SubNavbar::onlyTrashed()->get();
        $this->viewSubLink =  SubNavbar::Where('route_name', 'like', '%'.trim($this->search).'%')->OrderBy('route_name')->paginate(10);
        return view('livewire.backend.pages.navbar.view-sub-navbar',[
            'viewSubLink' => $this->viewSubLink,
        ])->layout('layouts.backend');
    }

    public function  inactive($id){
        SubNavbar::where('id', $id)->update([
                'status' =>    0,
            
            ]);
                 $notification = array(
                     'message' => 'Navbar status is Inactive',
                      'alert-type' => 'warning'
               );
            return   redirect()->route('view_Subnavbar_list')->with($notification);
        }
    public function  active($id){
        SubNavbar::where('id', $id)->update([
                'status' =>   1,
            
            ]);
                 $notification = array(
                    'message' => 'Navbar  status is Active ',
                    'alert-type' => 'success'
                );
        return   redirect()->route('view_Subnavbar_list')->with($notification);

      }

      public function delete($id){
        // dd($this->id);
        $products = SubNavbar::whereKey($this->id);
        $products->delete();
        SubNavbar::destroy($id);
        $notification = array(
        'message' => ' Data Trashed',
        'alert-type' => 'info'
    );
    return   redirect()->route('view_Subnavbar_list')->with($notification);
    }

// retore 
        public function restore($id){
            SubNavbar::withTrashed()->find($id)->restore();
            $notification = array(
            'message' => 'Data  Restored successfully',
            'alert-type' => 'Success'
        );
        return   redirect()->route('view_Subnavbar_list')->with($notification);
        }


        public function deleteSE(){
            // dd($this->selectedUser);
            $products = SubNavbar::whereKey($this->selectedsub);
            $products->delete();
        
            $notification = array(
            'message' => 'All Data Trashed',
            'alert-type' => 'error'
        );
        return   redirect()->route('view_Subnavbar_list')->with($notification);
    
        }

        public function fulleDelete($id){
       
            SubNavbar::onlyTrashed()->find($id)->forceDelete();
          $notification = array(
            'message' => 'sublink  Deleted successfully',
            'alert-type' => 'error'
        );
        return   redirect()->route('view_Subnavbar_list')->with($notification);
        }
}
