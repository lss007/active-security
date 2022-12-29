<?php

namespace App\Http\Livewire\Backend\Pages\HashTag;

use App\Models\HashTag;
use App\Models\RouteNameList;
use Livewire\Component;

class EditHashTag extends Component
{
    public $editRouteList ,$tagId ,$editTag, $sectionId, $pageId ;
    public function render()
    {
        $this->editRouteList =  RouteNameList::orderBy('route_name')->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11,12,16])->get();
        return view('livewire.backend.pages.hash-tag.edit-hash-tag')->layout('layouts.backend');
    }

    public function mount($id){
        $this->tagId= $id;
        $this->editTag = HashTag::where('id', $this->tagId)->where('status',1)->first();
        if( $this->editTag != Null){
            $this->pageId  =  $this->editTag->page_id;
            $this->sectionId  =  $this->editTag->section_id;

        }else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('viewHomeclients')->with($notification);
        }
    }
}
