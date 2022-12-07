<?php

namespace App\Http\Livewire\Backend\Pages\Services;

use App\Models\PageCategory;
use App\Models\ServicesPageSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditServices extends Component
{

    use WithFileUploads;

    public  $pageCategory ,$newImg;
    public  $page_cat_id ,$heading   ,$title ,$sec_image ,$link ,$para1 ,$para2 
    ,$para3,$para4 ,$para5 ,$para6 ;
    public $editServicesImg, $editServicesImg2,$editServicesImg3;

    protected $listeners = ['updateServicesImg' ,'updateServicesImg2','updateServicesImg3'];
        
    public function updateServicesImg($val){       
            $this->editServicesImg = $val;

        }
        public function updateServicesImg2($val){       
            $this->editServicesImg2 = $val;
          
        }
        public function updateServicesImg3($val){       
            $this->editServicesImg3 = $val;
         
        }

    
    public function render()
    {
        $this->pageCategory =  PageCategory::get();

        return view('livewire.backend.pages.services.edit-services')->layout('layouts.backend');
    }

    public function mount($id){
        $this->serviceId= $id;
        $this->editervice = ServicesPageSection::where('id', $this->serviceId)->first();


        if( $this->editervice != Null){
            $this->page_cat_id  =  $this->editervice->page_cat_id;
            $this->heading =  $this->editervice->heading;
            $this->title =  $this->editervice->title; 
            $this->sec_image = $this->editervice->sec_image;
            $this->tabletBanner = $this->editervice->tablet_banner;
            $this->mobileBanner = $this->editervice->mobile_banner;
    
            $this->para1 = $this->editervice->para1	;
            $this->para2 = $this->editervice->para2	;
            $this->para3 = $this->editervice->para3	;
            $this->para4 = $this->editervice->para4	;
            $this->para5 = $this->editervice->para5	;
        }else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_services')->with($notification);
        }





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
                $this->editServicesImg = '';
                $this->editServicesImg2 = '';
                $this->editServicesImg3 = '';


            }
        public function  updateServiceSection(){
            // dd($this->all());
            // $this->validate();
            if( $this->editServicesImg || $this->editServicesImg2 || $this->editServicesImg3 )  {
            if($this->editServicesImg)  {
                  // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/services-section/');

                            $imagePath1 = Storage::path('public/services-section/'. $this->sec_image);
                            if(File::exists($imagePath1)){
                                // dd($imagePath);
                                unlink($imagePath1);
                            }
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->editServicesImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_up_desk' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
                ServicesPageSection::where('id',$this->serviceId)->update([
                    'sec_image' =>    $imageName  ?? Null,
                    ]);
                
        }
                if($this->editServicesImg2)  {
                    // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/services-section/');

                            $imagePath2 = Storage::path('public/services-section/'. $this->tabletBanner);
                            if(File::exists($imagePath2)){
                                // dd($imagePath);
                                unlink($imagePath2);
                            }
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->editServicesImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_up_tab' . '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 
                ServicesPageSection::where('id',$this->serviceId)->update([
                    'tablet_banner' =>    $imageName2  ?? Null,
                    ]);
                
        }
            if($this->editServicesImg3)  {
                // ===========  working ans stora at storage path   =========== 
                        // $folderPath = public_path('upload/');
                        $folderPath3 = Storage::path('public/services-section/');
                        $imagePath3 = Storage::path('public/services-section/'. $this->mobileBanner);
                        if(File::exists($imagePath3)){
                            // dd($imagePath);
                            unlink($imagePath3);
                        }
                        // dd($folderPath);
                        $image_parts3 = explode(";base64,", $this->editServicesImg3);
                        $image_type_aux3 = explode("image/", $image_parts3[0]);
                        $image_type3 = $image_type_aux3[1];
                        $image_base643 = base64_decode($image_parts3[1]);
                        $imageName3 = time().'_up_mob' . '.png';
                        $imageFullPath3 = $folderPath3.$imageName3;
                        file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 
            ServicesPageSection::where('id',$this->serviceId)->update([
                'mobile_banner' =>    $imageName3  ?? Null,
                ]);
            
            }
        $notification = array(
            'message' => 'Services Section image updated',
            'alert-type' => 'info'
        );
        return redirect()->route('view_services')->with($notification);
    }
    // main if end 
    else {
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
