<?php

namespace App\Http\Livewire\Backend\Pages\Job;

use App\Models\HashTag;
use App\Models\JobSection;
use App\Models\RouteNameList;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddJobSection extends Component
{
    use WithFileUploads;
    public $heading,$title,$para1,$title2,$para2,$image,$button_name,$button_link;
    public $jobCropedImg, $jobCropedImg2,$jobCropedImg3;
    public $showDiv ,$routeId ,$gethashtag ,$getRouteList ,$hashTag;
    protected $listeners = ['CropJobImg' ,'CropJobImg2','CropJobImg3','selectSection'];
        
    public function showDiv(){
        $this->showDiv =! $this->showDiv;
    }

    public function selectSection($val){
        $this->routeId = $val;
        // dd($this->routeId);
    }
        public function CropJobImg($val)
        {       
            $this->jobCropedImg = $val;

            }
        public function CropJobImg2($val)
        {       
            $this->jobCropedImg2 = $val;

            }
        public function CropJobImg3($val)
        {       
            $this->jobCropedImg3 = $val;
            
            }
    public function mount()
    {
     $getjobSection1  = JobSection::exists();
     if($getjobSection1)
     {
         $notification = array(
             'message' => 'Section already exists',
             'alert-type' => 'warning'
         );
          return redirect()->route('view_job_section')->with( $notification);
      }
    }
    public function render()
    {
        $this->gethashtag = HashTag::where('page_id', $this->routeId)->get();
        
        $this->getRouteList = RouteNameList::orderBy('route_name')->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11,12,16])->get();

        return view('livewire.backend.pages.job.add-job-section')->layout('layouts.backend');
    }
        protected $rules = [
            'heading' => 'required',
            'title' => 'required',
            'para1' => 'required',
            'title2' => 'required',
            'para2' => 'required',
            'jobCropedImg' =>  'required', 
            'jobCropedImg2' =>  'required', 
            'jobCropedImg3' =>  'required', 
        ];
        protected $messages = [
            'section_id.required' => 'The Section  field is required.',
            'para1.required' => 'The paragraph field is required.',
            'para2.required' => 'The paragraph field is required.',
            'image.required' => 'The profile image field is required.',
            'jobCropedImg.required'  => 'The Banner Image field is required',
            'jobCropedImg2.required' => 'The Tablet Image field is required',
            'jobCropedImg3.required' => 'The Mobile Image field is required',
        ]; 
        private function resetInputFields(){
                    $this->heading   ='';
                    $this->title  ='';
                    $this->para1  ='';
                    $this->title2  ='';
                    $this->para2  ='';
                    $this->jobCropedImg = '';
                    $this->jobCropedImg2 = '';
                    $this->jobCropedImg3 = '';
                    $this->button_link ='';
        
                }
  
        public function storejobsection(){
                    // $this->validate();
                    if($this->jobCropedImg)  {
                        // ===========  working ans stora at storage path   =========== 
                                // $folderPath = public_path('upload/');
                                $folderPath = Storage::path('public/job/');
                                // dd($folderPath);
                                $image_parts = explode(";base64,", $this->jobCropedImg);
                                $image_type_aux = explode("image/", $image_parts[0]);
                                $image_type = $image_type_aux[1];
                                $image_base64 = base64_decode($image_parts[1]);
                                $imageName = time().'_ad_desk'. '.png';
                                $imageFullPath = $folderPath.$imageName;
                                file_put_contents($imageFullPath, $image_base64);      
                        // ===========  working ans stora at storage path   =========== 
                }
                if($this->jobCropedImg2)  {
                    // ===========  working ans stora at storage path   =========== 
                                // $folderPath = public_path('upload/');
                                $folderPath2 = Storage::path('public/job/');
                                // dd($folderPath);
                                $image_parts2 = explode(";base64,", $this->jobCropedImg2);
                                $image_type_aux2 = explode("image/", $image_parts2[0]);
                                $image_type2 = $image_type_aux2[1];
                                $image_base642 = base64_decode($image_parts2[1]);
                                $imageName2 = time().'_ad_tab'. '.png';
                                $imageFullPath2 = $folderPath2.$imageName2;
                                file_put_contents($imageFullPath2, $image_base642);      
                    // ===========  working ans stora at storage path   =========== 
                }
                if($this->jobCropedImg3)  {
                    // ===========  working ans stora at storage path   =========== 
                                // $folderPath = public_path('upload/');
                                $folderPath3 = Storage::path('public/job/');
                                // dd($folderPath);
                                $image_parts3 = explode(";base64,", $this->jobCropedImg3);
                                $image_type_aux3 = explode("image/", $image_parts3[0]);
                                $image_type3 = $image_type_aux3[1];
                                $image_base643 = base64_decode($image_parts3[1]);
                                $imageName3 = time().'_ad_mob'. '.png';
                                $imageFullPath3 = $folderPath3.$imageName3;
                                file_put_contents($imageFullPath3, $image_base643);      
                    // ===========  working ans stora at storage path   =========== 
                }
                        JobSection::create([
                            'heading' =>    $this->heading,
                            'title' =>      $this->title,
                            'para1' =>      $this->para1,
                            'title2' =>      $this->title2,
                            'para2' =>      $this->para2,
                            'button_name' =>      $this->button_name,
                            'link' => $this->button_link,
                            'image' => $imageName  ?? NULL,
                            'tablet_banner' => $imageName2  ?? NULL,
                            'mobile_banner' => $imageName3 ?? NULL,
                            'hash_tag_id' => $this->hashTag,

                        ]);

                $notification = array(
                    'message' => 'Job Section Published',
                    'alert-type' => 'success'
                );
    return redirect()->route('view_job_section')->with($notification);
    }
}
