<?php

namespace App\Http\Livewire\Backend\Pages\Banner;

use App\Models\HashTag;
use App\Models\HomeBanner;
use App\Models\RouteNameList;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeBanner extends Component
{
    use WithFileUploads;
    public $Heading ,$Title,$bannerImage ,$tabletBanner ,$mobileBanner ,$buttonText ,$button_link,$BannerParagaph ;
    public $new_Image ,$homeBannerId ,$editcropedImg ,$editcropedImg2,$editcropedImg3; 
    public $updateRouteId, $showDiv ,$getRouteId ,$hashTag;
    public function mount($id){
            $this->homeBannerId= $id;
            $this->editHomeBanner = HomeBanner::where('id', $this->homeBannerId)->first();
            if( $this->editHomeBanner != Null){
                $this->Heading =  $this->editHomeBanner->heading; 
                $this->Title  =  $this->editHomeBanner->title;
                $this->BannerParagaph = $this->editHomeBanner->banner_paragaph;
                $this->bannerImage = $this->editHomeBanner->banner_image;
                $this->tabletBanner = $this->editHomeBanner->tablet_banner;
                $this->mobileBanner = $this->editHomeBanner->mobile_banner;
                $this->buttonText = $this->editHomeBanner->button_text	;
                $this->button_link = $this->editHomeBanner->button_link;
                $this->hashTag = $this->editHomeBanner->hash_tag_id;

            
            }
            else {
                $notification = array(
                    'message' => 'Not Editable',
                    'alert-type' => 'error'
                );
                return redirect()->route('viewHomebanner')->with($notification);
            }
    
 }

 

 protected $listeners = ['editHomeBannerImg' ,'editHomeBannerImg2','editHomeBannerImg3','updateSection'];
 
        public function editHomeBannerImg($val){       
            $this->editcropedImg = $val;
        // dd($this->cropedImg);
        }
        public function editHomeBannerImg2($val){       
            $this->editcropedImg2 = $val;
        // dd($this->cropedImg);
        }
        public function editHomeBannerImg3($val){       
            $this->editcropedImg3 = $val;
        // dd($this->cropedImg);
        }

        public function showDiv()
        {
            $this->showDiv =! $this->showDiv;
        }

    public function updateSection($val){
            $this->updateRouteId = $val;
            // dd(  $this->updateRouteId );
          }
    public function render()
    {
        if($this->updateRouteId ){

            $this->gethashtag = HashTag::where('page_id', $this->updateRouteId)->get();  
        }else{
            
            $this->gethashtag = HashTag::where('page_id', $this->button_link)->get();  

        }
        
        $this->getRouteList = RouteNameList::orderBy('route_name')->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11,12,16])->get();

        return view('livewire.backend.pages.banner.edit-home-banner')->layout('layouts.backend');
    }
    protected $rules = [
        'Heading' => 'required',
        'Title' => 'required',
        'BannerParagaph' => 'required', 
        // 'editcropedImg' => 'required', 
        // 'editcropedImg2' => 'required', 
        // 'editcropedImg3' => 'required', 
    ];
    // protected $messages = [
    //     'editcropedImg.required' => 'The Banner Image field is required.',
    //     'editcropedImg2.required' => 'The Tablet Banner  field is required.',
    //     'editcropedImg3.required' => 'The Mobile Banner  field is required.',
    //   ];
    private function resetInputFields(){
        $this->Title = '';
        $this->Heading = '';
        $this->BannerParagaph = '';
        $this->editcropedImg = '';
        $this->editcropedImg2 = '';
        $this->editcropedImg3 = '';
        }
    public function updateHomeBanner(){
        // dd($this->all());
            $this->validate();
               
        if( $this->editcropedImg || $this->editcropedImg2 || $this->editcropedImg3 )  {
            if($this->editcropedImg){
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-banner/');
                            if(isset($this->bannerImage)){
                            $imagePath1 = Storage::path('public/Home-banner/'. $this->bannerImage);
                            if(File::exists($imagePath1)){
                                // dd($imagePath);
                                unlink($imagePath1);
                            }
                            }
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->editcropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_up_desk' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);    
                            HomeBanner::where('id',  $this->homeBannerId)->update([
                                'banner_image' =>   $imageName ,
                                ]);
            }

            // ===========  working ans stora at storage path   =========== 
            if($this->editcropedImg2){
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/Home-banner/');
                            if($this->tabletBanner){
                            $imagePath2 = Storage::path('public/Home-banner/'. $this->tabletBanner);
                            if(File::exists($imagePath2)){
                                // dd($imagePath);
                                unlink($imagePath2);
                            }
                            }
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->editcropedImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_up_tab' . '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 
            HomeBanner::where('id',  $this->homeBannerId)->update([
         
                'tablet_banner' =>   $imageName2 ,
        

                ]);
            }
            if($this->editcropedImg3){
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/Home-banner/');
                            if($this->mobileBanner){
                            $imagePath3 = Storage::path('public/Home-banner/'. $this->mobileBanner);
                            if(File::exists($imagePath3)){
                                // dd($imagePath);
                                unlink($imagePath3);
                                }
                            }
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->editcropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_up_mob' . '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 
            HomeBanner::where('id',  $this->homeBannerId)->update([
           
                'mobile_banner' =>   $imageName3 ,

                ]);
            }
            // end inner if 
   
            $notification = array(
                'message' => 'Banner image Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('viewHomebanner')->with($notification);
                 
            }
            // end outer if 
         else{
                HomeBanner::where('id',  $this->homeBannerId)->update([
                        'heading' =>    $this->Heading,
                        'title' =>    $this->Title,
                        'banner_paragaph' =>    $this->BannerParagaph,
                        'button_text' =>    $buttonText  ?? Null,
                        'button_link' =>    $this->button_link,
            'hash_tag_id' =>    $this->hashTag ?? Null,


                ]);
                    $notification = array(
                        'message' => 'Banner Text updated Updated',
                        'alert-type' => 'success'
                    );
                return redirect()->route('viewHomebanner')->with($notification);
            }
        
        }
}
