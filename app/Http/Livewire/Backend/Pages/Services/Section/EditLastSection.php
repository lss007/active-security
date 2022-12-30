<?php

namespace App\Http\Livewire\Backend\Pages\Services\Section;

use App\Models\HashTag;
use Livewire\Component;
use App\Models\PageCategory;
use App\Models\RouteNameList;
use App\Models\ServiceLastSection;
class EditLastSection extends Component
{

    public $pageCategory,$heading  ,$link   ,$list1  ,$list2  ,$list3 ,$button ,$list4;

    public $showDiv ,$getRouteList ,$gethashtag ,$getRouteId ,$hashTag;
 
    protected $listeners = ['selectSection'];
 
    public function mount($id){
        $this->serviceId= $id;
        $this->editsection = ServiceLastSection::where('id', $this->serviceId)->first();
        $this->heading  =  $this->editsection->heading;
        $this->link =  $this->editsection->link;
        $this->hashTag =  $this->editsection->hash_tag_id;

        $this->button =  $this->editsection->button; 
        $this->list1 = $this->editsection->list1;
        $this->list2 = $this->editsection->list2;
        $this->list3 = $this->editsection->list3;
        $this->list4 = $this->editsection->list4;
    }
    public function showDiv(){
        $this->showDiv =! $this->showDiv; 
    }
    public function selectSection($val){
        $this->getRouteId = $val;
      }

      public function render()
      {
        if( $this->link ){
            $this->gethashtag = HashTag::where('page_id', $this->link)->get();

        }else {

            $this->gethashtag = HashTag::where('page_id', $this->getRouteId)->get();
        }
          $this->getRouteList = RouteNameList::orderBy('route_name')->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11,12,16])->get();
  
          return view('livewire.backend.pages.services.section.edit-last-section')->layout('layouts.backend');
      
      }
    protected $rules = [
        'heading' => 'required ',
        // 'link' => 'required',
        'list1' => 'required|string', 
        'list2' => 'required|string', 
        'list3' => 'required|string', 
        'list4' => 'required|string',  

    ];

     private function resetInputFields(){
            $this->heading = '';
            $this->link = '';
            $this->list1 = '';
            $this->list2 = '';
            $this->list3 = '';
            $this->list4 = '';
  


        }
            public function updateLastSection(){
                $this->validate();
                ServiceLastSection::where('id', $this->serviceId)->update([
                    'heading' =>    $this->heading,
                    'link' =>    $this->link,
                    'button' =>    $this->button,
                    'list1' =>    $this->list1,
                    'list2' =>    $this->list2,
                    'list3' =>    $this->list3,
                    'list4' =>    $this->list4,
                    'hash_tag_id' => $this->hashTag,
    
                    ]);
                    $notification = array(
                        'message' => 'Services last Section Published',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('view_last_section')->with($notification);
                
            }
}
