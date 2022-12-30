<?php

namespace App\Http\Livewire\Backend\Pages\Job;

use App\Models\HashTag;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\JobSection;
use App\Models\RouteNameList;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EditJobSection extends Component
{
    use WithFileUploads;
    public $heading  ,$title  ,$para1 ,$title2 , $para2 ,$image ,$button_name ,$button_link; 
    public $newimage ,$tabletBanner,$mobileBanner;

    public $CropedImg, $CropedImg2,$CropedImg3;
    public $showDiv ,$routeId ,$gethashtag ,$getRouteList ,$hashTag;
    protected $listeners = ['updateJobImg' ,'updateJobImg2','updateJobImg3' ,'selectSection'];
        
    public function showDiv(){
        $this->showDiv =! $this->showDiv;
    }

    public function selectSection($val){
        $this->routeId = $val;
        // dd($this->routeId);
    }
        public function updateJobImg($val)
        {       
            $this->CropedImg = $val;
            }
        public function updateJobImg2($val)
        {       
            $this->CropedImg2 = $val;
            }
        public function updateJobImg3($val)
        {       
            $this->CropedImg3 = $val;
            }

    public function mount($id){
        $this->postId = $id;

        $this->editjob= JobSection::where('id', $this->postId)->first();


        if( $this->editjob != Null){
        $this->heading  =  $this->editjob->heading;
        $this->title =  $this->editjob->title;
        $this->para1 =  $this->editjob->para1; 
        $this->title2 =  $this->editjob->title2;
        $this->para2 = $this->editjob->para2;

        $this->Image = $this->editjob->image;
        $this->tabletBanner = $this->editjob->tablet_banner;
        $this->mobileBanner = $this->editjob->mobile_banner;

        $this->button_link = $this->editjob->link;
        $this->button_name = $this->editjob->button_name;
        }else 
        {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_job_section')->with($notification);
        }


    }
    public function render()
    {
if($this->button_link)
{
    $this->gethashtag = HashTag::where('page_id', $this->button_link)->get();

}else{

    $this->gethashtag = HashTag::where('page_id', $this->routeId)->get();
}
        $this->getRouteList = RouteNameList::orderBy('route_name')->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11,12,16])->get();

        return view('livewire.backend.pages.job.edit-job-section')->layout('layouts.backend');
    }
        protected $rules = [
            'heading' => 'required',
            'title' => 'required',
            'para1' => 'required',
            'title2' => 'required',
            'para2' => 'required',
            // 'newimage' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    
        ];
       private function resetInputFields(){
                $this->heading   ='';
                $this->title  ='';
                $this->para1  ='';
                $this->title2  ='';
                $this->para2  ='';
                $this->newimage = '';
            }
        protected $messages = [
            'para1.required' => 'The paragraph field is required.',
            'para2.required' => 'The paragraph field is required.',
        ];  
        public function updatejobsection(){
            if($this->CropedImg ||  $this->CropedImg2 || $this->CropedImg3)  {
         
                if($this->CropedImg)  {
                    // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/job/');
                            if($this->Image){
                            $imagePath = Storage::path('public/job/'. $this->Image);
                                if(File::exists($imagePath) ){
                                    unlink($imagePath);
                                }
                            }
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->CropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_up_desk'. '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);      
                    // ===========  working ans stora at storage path   =========== 
                    JobSection::where('id',$this->postId)->update([
                        'image' => $imageName ,
           
                    ]);
            }
            if($this->CropedImg2)  {
                // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/job/');
                            if($this->tabletBanner){
                            $imagePath2 = Storage::path('public/job/'. $this->tabletBanner);
                                if(File::exists($imagePath2) ){
                                    unlink($imagePath2);
                                }
                            }
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->CropedImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_up_tab'. '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);      
                // ===========  working ans stora at storage path   =========== 
                JobSection::where('id',$this->postId)->update([
                    'tablet_banner' => $imageName2 ,
                
                ]);
            }
            if($this->CropedImg3)  {
                // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/job/');

                            if($this->mobileBanner){
                            $imagePath3 = Storage::path('public/job/'. $this->mobileBanner);
                                if(File::exists($imagePath3) ){
                                    unlink($imagePath3);
                                }
                            }
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->CropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_up_mob'. '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);      
                // ===========  working ans stora at storage path   =========== 
                JobSection::where('id',$this->postId)->update([
                    'mobile_banner' => $imageName3 ,
                ]);
            }
             
                $notification = array(
                    'message' => 'Job Section updated',
                    'alert-type' => 'info'
                );
                 return redirect()->route('view_job_section')->with($notification);
                 }
                 else {
                    JobSection::where('id',$this->postId)->update([
                        'heading' =>       $this->heading,
                        'title' =>         $this->title,
                        'para1' =>         $this->para1,
                        'title2' =>        $this->title2,
                        'para2' =>         $this->para2,
                        'button_name' =>   $this->button_name,
                        'link' =>          $this->button_link,
                        'hash_tag_id' => $this->hashTag,

                      
                    ]);
                    $notification = array(
                        'message' => 'Job Section updated',
                        'alert-type' => 'success'
                    );
                     return redirect()->route('view_job_section')->with($notification);
                 }

             
            }
}
