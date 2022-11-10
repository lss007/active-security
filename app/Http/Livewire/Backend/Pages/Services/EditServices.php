<?php

namespace App\Http\Livewire\Backend\Pages\Services;

use App\Models\PageCategory;
use App\Models\ServicesPageSection;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditServices extends Component
{

    use WithFileUploads;

    public  $pageCategory ,$newImg;
    public  $page_cat_id ,$heading   ,$title ,$sec_image ,$link ,$para1 ,$para2 
    ,$para3,$para4 ,$para5 ,$para6 ;
    public function render()
    {
        $this->pageCategory =  PageCategory::get();

        return view('livewire.backend.pages.services.edit-services')->layout('layouts.backend');
    }

    public function mount($id){
        $this->serviceId= $id;
        $this->editervice = ServicesPageSection::where('id', $this->serviceId)->first();
        $this->page_cat_id  =  $this->editervice->page_cat_id;
        $this->heading =  $this->editervice->heading;
        $this->title =  $this->editervice->title; 
        $this->sec_image = $this->editervice->sec_image;
        $this->para1 = $this->editervice->para1	;
        $this->para2 = $this->editervice->para2	;
        $this->para3 = $this->editervice->para3	;
        $this->para4 = $this->editervice->para4	;
        $this->para5 = $this->editervice->para5	;



}
        protected $rules = [
            'page_cat_id' => 'required',
            'heading' => 'required',
            'title' => 'required',
            'para1' => 'required|string', 
            'para2' => 'required|string', 

        ];

        private function resetInputFields(){
                $this->page_cat_id = '';
                $this->heading = '';
                $this->title = '';
                $this->para1 = '';
                $this->para2 = '';
                // $this->para3 = '';
                $this->sec_image = '';
            }
        public function  updateServiceSection(){
            // dd($this->all());
            $this->validate();
            if($this->newImg)  {
                $this->validate([
                    'newImg' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $fileName = time().'_'.$this->newImg->getClientOriginalName();
                $filePath = $this->newImg->storeAs('services-section', $fileName, 'public');
                ServicesPageSection::where('id',$this->serviceId)->update([
                 
                    'sec_image' =>    $fileName  ?? Null,
                    ]);
                    $notification = array(
                        'message' => 'Services Section image updated',
                        'alert-type' => 'info'
                    );
                    return redirect()->route('view_services')->with($notification);
        }else {
            ServicesPageSection::where('id',$this->serviceId)->update([
                'page_cat_id' =>    $this->page_cat_id,
                'heading' =>    $this->heading,
                'title' =>    $this->title,
                'para1' =>    $this->para1,
                'para2' =>    $this->para2,
                'para3' =>    $this->para3,
                'para4' =>    $this->para4,
                'para5' =>    $this->para5,
              
                ]);
                $notification = array(
                    'message' => 'Services Section Updated',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_services')->with($notification);
        }
                
        }
        
}
