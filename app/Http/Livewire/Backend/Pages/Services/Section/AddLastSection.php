<?php

namespace App\Http\Livewire\Backend\Pages\Services\Section;

use App\Models\PageCategory;
use App\Models\ServiceLastSection;
use Livewire\Component;

class AddLastSection extends Component
{
    public $pageCategory,$heading  ,$link   ,$list1  ,$list2  ,$list3 ,$button ,$list4;

    public function render()
    {
        $this->pageCategory =  PageCategory::get();

        return view('livewire.backend.pages.services.section.add-last-section')->layout('layouts.backend');
    }

    protected $rules = [
        'heading' => 'required ',
        'link' => 'required',
        'list1' => 'required|string', 
        'list2' => 'required|string', 
        'list3' => 'required|string', 
        'list4' => 'required|string',  

    ];
    // protected $messages = [
    //     'heading.unique' => 'Page heading has already been taken',
    //   ];
     private function resetInputFields(){
            $this->heading = '';
            $this->link = '';
            $this->list1 = '';
            $this->list2 = '';
            $this->list3 = '';
            $this->list4 = '';
  


        }


        public function storeLastSection(){
            $this->validate();
            ServiceLastSection::create([
                'heading' =>    $this->heading,
                'link' =>    $this->link,
                'button' =>    $this->button,
                'list1' =>    $this->list1,
                'list2' =>    $this->list2,
                'list3' =>    $this->list3,
                'list4' =>    $this->list4,

                ]);
                $notification = array(
                    'message' => 'Services last Section Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_last_section')->with($notification);
        }

}
