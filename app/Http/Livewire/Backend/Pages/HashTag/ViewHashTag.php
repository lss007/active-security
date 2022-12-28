<?php

namespace App\Http\Livewire\Backend\Pages\HashTag;

use App\Models\HashTag;
use Livewire\Component;
use Livewire\WithPagination;

class ViewHashTag extends Component
{
    use WithPagination;
    public   $search='' ;
    private  $viewallhashtag;
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $this->viewallhashtag =     HashTag::
       
        join('route_name_lists' , 'hash_tags.page_id' ,'route_name_lists.id')
            ->select('hash_tags.*','route_name_lists.route_name')->
        Where('page_id', 'like', '%'.trim($this->search).'%')->
                  orWhere('route_name', 'like', '%'.trim($this->search).'%')->
                  orWhere('tag_name', 'like', '%'.trim($this->search).'%')
                  ->paginate(10);
        return view('livewire.backend.pages.hash-tag.view-hash-tag',[
            'viewallhashtag' => $this->viewallhashtag,
        ])->layout('layouts.backend');
    }

    
    public function  inactive($id){
        HashTag::where('id', $id)->update([
                'status' =>    0,
            
            ]);
                 $notification = array(
                     'message' => '  status is Inactive',
                      'alert-type' => 'warning'
               );
            return   redirect()->route('view_Allhashtag')->with($notification);
        }
    public function  active($id){
        HashTag::where('id', $id)->update([
                'status' =>   1,
            
            ]);
                 $notification = array(
                    'message' => '  status is Active ',
                    'alert-type' => 'success'
                );
        return   redirect()->route('view_Allhashtag')->with($notification);

      }

      public function delete($id){
        // dd($this->id);
        $products = HashTag::whereKey($this->id);
        $products->delete();
        HashTag::destroy($id);
        $notification = array(
           'message' => 'Record  Deleted',
           'alert-type' => 'info'
       );
       return   redirect()->route('view_Allhashtag')->with($notification);
    }
}
