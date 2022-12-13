<?php

namespace App\Http\Livewire\Backend\Pages\Services;

use App\Models\PageCategory;
use App\Models\ServicesPageSection;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddServices extends Component
{
    use WithFileUploads;

    public  $pageCategory;
    public  $page_cat_id ,$heading   ,$title ,$sec_image ,$link ,$para1 ,$para2 
    ,$para3,$para4 ,$para5 ,$para6 ;

    public $getServicesImg, $getServicesImg2,$getServicesImg3;

    protected $listeners = ['addServicesImg' ,'addServicesImg2','addServicesImg3'];
        
    public function addServicesImg($val){       
            $this->getServicesImg = $val;
           
        }
        public function addServicesImg2($val){       
            $this->getServicesImg2 = $val;
           
        }
        public function addServicesImg3($val){       
            $this->getServicesImg3 = $val;
            // dd($this->getServicesImg3);
        }
    public function render()
    {
        $this->pageCategory =  PageCategory::get();
        return view('livewire.backend.pages.services.add-services')->layout('layouts.backend');
    }

    protected $rules = [
      
        'page_cat_id' =>'required|unique:services_page_sections,page_cat_id',
        'heading' => 'required',
        'title' => 'required',
        'para1' => 'required|string', 
        'para2' => 'required|string', 
        'getServicesImg' => 'required', 
        'getServicesImg2' => 'required', 
        'getServicesImg3' => 'required', 


    
    ];

    protected $messages = [
        'page_cat_id.unique' => 'Page Category has already been taken',

        'getServicesImg.required' => 'The Desktop Image field is required',
        'getServicesImg2.required' => 'The Tablet Image field is required',
        'getServicesImg3.required' => 'The Mobile Image field is required',
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
        // $this->validate();


        if($this->getServicesImg)  {
            // $this->validate([
            //     'sec_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            // ]);
            // $fileName = time().'_'.$this->sec_image->getClientOriginalName();
            // $filePath = $this->sec_image->storeAs('services-section', $fileName, 'public');

            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/services-section/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->getServicesImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_desk' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
    }
    if($this->getServicesImg2){
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/services-section/');
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->getServicesImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_tab' . '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 
    }
    if($this->getServicesImg3){
            // ===========  working ans stora at storage path   =========== 
                        // $folderPath = public_path('upload/');
                        $folderPath3 = Storage::path('public/services-section/');
                        // dd($folderPath);
                        $image_parts3 = explode(";base64,", $this->getServicesImg3);
                        $image_type_aux3 = explode("image/", $image_parts3[0]);
                        $image_type3 = $image_type_aux3[1];
                        $image_base643 = base64_decode($image_parts3[1]);
                        $imageName3 = time().'_mob' . '.png';
                        $imageFullPath3 = $folderPath3.$imageName3;
                        file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 
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
            'sec_image' =>    $imageName  ?? Null,
            'tablet_banner' =>    $imageName2  ?? Null,
            'mobile_banner' =>    $imageName3  ?? Null,

            ]);
            $notification = array(
                'message' => 'Services Section Published',
                'alert-type' => 'success'
            );
            return redirect()->route('view_services')->with($notification);
    }

}
