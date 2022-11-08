<?php

namespace App\Http\Livewire\Backend\Pages\Services;

use App\Models\PageCategory;
use App\Models\ServicesPageSection;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddServices extends Component
{
    use WithFileUploads;

    public  $pageCategory;
    public  $page_cat_id ,$heading   ,$title ,$sec_image ,$link ,$para1 ,$para2 
    ,$para3,$para4 ,$para5 ,$para6 ;
    public function render()
    {
        $this->pageCategory =  PageCategory::get();
        return view('livewire.backend.pages.services.add-services')->layout('layouts.backend');
    }

    protected $rules = [
        'page_cat_id' => 'required',
        'heading' => 'required',
        'title' => 'required',
        'para1' => 'required|string', 
        'para2' => 'required|string', 
        // 'para3' => 'required', 
        'sec_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
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
    public function saceServiceSection(){
        $this->validate();


        if($this->sec_image)  {
            $this->validate([
                'sec_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName = time().'_'.$this->sec_image->getClientOriginalName();
            $filePath = $this->sec_image->storeAs('services-section', $fileName, 'public');
    }
             ServicesPageSection::create([
            'page_cat_id' =>    $this->page_cat_id,
            'heading' =>    $this->heading,
            'title' =>    $this->title,
            'para1' =>    $this->para1,
            'para2' =>    $this->para2,
            'para3' =>    $this->para3,
            'para4' =>    $this->para4,
            'para5' =>    $this->para5,
            'sec_image' =>    $fileName  ?? Null,
            ]);
            $notification = array(
                'message' => 'Services Section Published',
                'alert-type' => 'success'
            );
            return redirect()->route('view_services')->with($notification);
    }

}
