<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use Livewire\Component;

use App\Models\HomeSectionOne;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class EditHomeSection1 extends Component
{
    use WithFileUploads;

    public $heading,$sub_heading,$paragraph,$mainImage,$logo1,$logo2,$logo3 ,$secPostId,$editHomeSec1;
    public $main_img,$logoImg1 ,$logoImg2 ,$logoImg3 ,$tabletImg ,$mobileImg ;
    public $editSecCropedImg1 ,$editSecCropedImg2 ,$editSecCropedImg3;

    protected $listeners = ['editSection1Img' ,'editSection1Img2','editSection1Img3'];    
        public function editSection1Img($val){   
               $this->editSecCropedImg1 = $val;
           
        }

        public function editSection1Img2($val){ 
             $this->editSecCropedImg2 = $val;
        }

        public function editSection1Img3($val){  
             $this->editSecCropedImg3 = $val;
        }

    public function mount($id){
        $this->secPostId = $id;
        $this->editHomeSec1 = HomeSectionOne::where('id', $this->secPostId)->first();

        if( $this->editHomeSec1 != Null){
            $this->heading  =  $this->editHomeSec1->heading;
            $this->sub_heading =  $this->editHomeSec1->sub_heading;
            $this->paragraph =  $this->editHomeSec1->paragraph; 
            $this->mainImage = $this->editHomeSec1->main_image;
            $this->tabletImg = $this->editHomeSec1->tablet_img;
            $this->mobileImg = $this->editHomeSec1->mobile_img;
            $this->logo1 = $this->editHomeSec1->logo1;
            $this->logo2 = $this->editHomeSec1->logo2;
            $this->logo3 = $this->editHomeSec1->logo3;
        }
        else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('manageHomeSection1')->with($notification);
        }


        $getSection1  = HomeSectionOne::where('id', $this->secPostId)->where('status',Null)->exists();
        if($getSection1)
        {
            $notification = array(
                'message' => 'Access denied ',
                'alert-type' => 'error'
            );
             return redirect()->route('manageHomeSection1')->with( $notification);
         }
        }
    protected $rules = [
            'heading' => 'required',
            'sub_heading' => 'required',
            'paragraph' => 'required',

    ];
   private function resetInputFields(){
            $this->heading = '';
            $this->sub_heading = '';
            $this->paragraph = '';
            $this->main_img = '';
            $this->logoImg1 = '';
            $this->logoImg2 = '';
            $this->logoImg3 = '';
        }
    public function render()
    {
        return view('livewire.backend.pages.home.sections.edit-home-section1')->layout('layouts.backend');
    }
    public function updateHomeSection1(){
        if( $this->editSecCropedImg1 || $this->editSecCropedImg2 ||  $this->editSecCropedImg3 ||   $this->logoImg1 || $this->logoImg2 || $this->logoImg3)  {
            if($this->editSecCropedImg1){    
             // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath = Storage::path('public/Home-section/');
                    // dd($folderPath);
                    if(isset($this->mainImage))
                    {
                        $imagePath = Storage::path('public/Home-section/'. $this->mainImage);
                            if(File::exists($imagePath) )
                            {
                                unlink($imagePath);
                            }
                        }
                    $image_parts = explode(";base64,", $this->editSecCropedImg1);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $imageName = uniqid() . '.png';
                    $imageFullPath = $folderPath.$imageName;
                    file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
                 HomeSectionOne::where('id', $this->secPostId)->update([
                        'main_image' =>     $imageName ,
                    ]);
            }
            if($this->editSecCropedImg2){    
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath2 = Storage::path('public/Home-section/');
                    // dd($folderPath);
                    if(isset($this->tabletImg)){
                        $imagePath2 = Storage::path('public/Home-section/'. $this->tabletImg);
                            if(File::exists($imagePath2) ){
                                unlink($imagePath2);
                            }
                        }
                    $image_parts2 = explode(";base64,", $this->editSecCropedImg2);
                    $image_type_aux2 = explode("image/", $image_parts2[0]);
                    $image_type2 = $image_type_aux2[1];
                    $image_base642 = base64_decode($image_parts2[1]);
                    $imageName2 = time() .'_ad_'. '.png';
                    $imageFullPath2 = $folderPath2.$imageName2;
                    file_put_contents($imageFullPath2, $image_base642);                
               // ===========  working ans stora at storage path   =========== 
                HomeSectionOne::where('id', $this->secPostId)->update([
                       'tablet_img' =>     $imageName2 ,
                    ]);
               }
               if($this->editSecCropedImg3){    
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath3 = Storage::path('public/Home-section/');
                    // dd($folderPath);
                    if(isset($this->mobileImg)){
                        $imagePath3 = Storage::path('public/Home-section/'. $this->mobileImg);
                            if(File::exists($imagePath3) ){
                                unlink($imagePath3);
                            }
                        }
                    $image_parts3 = explode(";base64,", $this->editSecCropedImg3);
                    $image_type_aux3 = explode("image/", $image_parts3[0]);
                    $image_type3 = $image_type_aux3[1];
                    $image_base643 = base64_decode($image_parts3[1]);
                    $imageName3 = time() .'ad_mob'. '.png';
                    $imageFullPath3 = $folderPath3.$imageName3;
                    file_put_contents($imageFullPath3, $image_base643);                
               // ===========  working ans stora at storage path   =========== 
                HomeSectionOne::where('id', $this->secPostId)->update([
                             'mobile_img' =>     $imageName3 ,
                    ]);
               }
             if($this->logoImg1 ){
                $this->validate([
                    'logoImg1' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $logofile1 = time().'_up'.$this->logoImg1->getClientOriginalName();
                $filePath2 = $this->logoImg1->storeAs('Home-section', $logofile1, 'public');
                if(isset($this->logo1)){
                    $imagePath4 = Storage::path('public/Home-section/'. $this->logo1);
                        if(File::exists($imagePath4) ){
                            unlink($imagePath4);
                        }
                    }
                HomeSectionOne::where('id', $this->secPostId)->update([
                    'logo1' =>     $logofile1 ,
                 ]);
            }
            if( $this->logoImg2){
                $this->validate([
                    'logoImg2' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $logofile2 = time().'_up'.$this->logoImg2->getClientOriginalName();
                $filePath3 = $this->logoImg2->storeAs('Home-section', $logofile2, 'public');
                if(isset($this->logo2)){
                    $imagePath5 = Storage::path('public/Home-section/'. $this->logo2);
                        if(File::exists($imagePath5) ){
                            unlink($imagePath5);
                        }
                    }
                HomeSectionOne::where('id', $this->secPostId)->update([
                    'logo2' =>     $logofile2 ,
                 ]);
            }  
            if($this->logoImg3){
                $this->validate([
                    'logoImg3' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $logofile3 = time().'_up'.$this->logoImg3->getClientOriginalName();
                $filePath4 = $this->logoImg3->storeAs('Home-section', $logofile3, 'public');
                if(isset($this->logo3)){
                    $imagePath6 = Storage::path('public/Home-section/'. $this->logo3);
                        if(File::exists($imagePath6) ){
                            unlink($imagePath6);
                        }
                    }
                HomeSectionOne::where('id', $this->secPostId)->update([
                    'logo3' =>     $logofile3 ,
                 ]);
                }
                 $notification = array(
                    'message' => 'Section Images  successfully',
                    'alert-type' => 'info'
            );
            return redirect()->route('manageHomeSection1')->with($notification);
        }else{
              $this->validate();
            HomeSectionOne::where('id', $this->secPostId)->update([
                'heading' =>    $this->heading,
                'sub_heading' =>    $this->sub_heading,
                'paragraph' =>    $this->paragraph,
          
        ]);
                $notification = array(
                    'message' => 'Home Text Updated successfully',
                    'alert-type' => 'success'
            );
        return redirect()->route('manageHomeSection1')->with($notification);
        }



        

    }
}
