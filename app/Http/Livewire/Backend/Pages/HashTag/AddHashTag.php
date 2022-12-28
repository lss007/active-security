<?php

namespace App\Http\Livewire\Backend\Pages\HashTag;

use App\Models\HashTag;
use App\Models\Navbar;
use App\Models\PageCategory;
use App\Models\RouteNameList;
use Livewire\Component;

class AddHashTag extends Component
{
 public    $getPageCategory ,$sectionId, $pageId ;
    public function render()
    {
        $this->getPageCategory =  RouteNameList::orderBy('route_name')->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11,12,16])->get();
        return view('livewire.backend.pages.hash-tag.add-hash-tag')->layout('layouts.backend');;
    }

    protected $rules = [
        'pageId' => 'required',
        'sectionId' => 'required |numeric',

    ];

    public function saveHashtag(){
               $this->validate();
                if($this->sectionId){
                    for ($x = 1; $x <= $this->sectionId; $x++) {

            HashTag::create([
                'page_id' => $this->pageId ,
                'section_id' =>   $x,
                ]);
            }
                $notification = array(
                    'message' => ' Tag Published ',
                    'alert-type' => 'success'
                );
                        return redirect()->route('view_Allhashtag')->with($notification);
                }
             
    }
}
