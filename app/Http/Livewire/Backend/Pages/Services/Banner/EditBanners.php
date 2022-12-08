<?php

namespace App\Http\Livewire\Backend\Pages\Services\Banner;

use App\Models\PageCategory;
use App\Models\ServicesPageBanner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditBanners extends Component
{
    use WithFileUploads;
    public $getPCategory,$pageCatId, $heading,$banner,$link ,$allBanners,$editerviceBanner;
    public $bannerId ,$newBaner ,$tabletBanner ,$mobileNanner;


    public $updateBotBan1, $updateBotBan2,$updateBotBan3 ,$search='' ;

    protected $listeners = ['editBottomBanner1' ,'editBottomBanner2','editBottomBanner3'];
        
    public function editBottomBanner1($val){       
            $this->updateBotBan1 = $val;
        }
        public function editBottomBanner2($val){       
            $this->updateBotBan2 = $val;
        }
        public function editBottomBanner3($val){       
            $this->updateBotBan3 = $val;
        }

    public function render()
    {
        $this->getPCategory =  PageCategory::get();
        return view('livewire.backend.pages.services.banner.edit-banners')->layout('layouts.backend');
    }
    public function mount($id){
        $this->bannerId= $id;
        $this->editerviceBanner = ServicesPageBanner::where('id', $this->bannerId)->where('status',1)->first();
      
        if( $this->editerviceBanner != Null){
            $this->pageCatId  =  $this->editerviceBanner->page_cat_id;
            $this->heading =  $this->editerviceBanner->heading;
            $this->banner =  $this->editerviceBanner->banner; 
            $this->tabletBanner =  $this->editerviceBanner->tablet_banner; 
            $this->mobileBanner =  $this->editerviceBanner->mobile_banner; 

            $this->link = $this->editerviceBanner->link;
        }else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_services_banner')->with($notification);
            }
        }
        protected $rules = [
            'pageCatId' =>'required',
            'heading' =>'required',
        ];
        protected $messages = [
            'pageCatId.required' => 'Page Category required',
            'heading.required' => 'The Heading field is required.',
          ];
        private function resetInputFields(){
              $this->pageCatId = '';
              $this->heading = '';
              $this->newBaner = '';
            }
    
        public function updatebottombanner(){
            // dd($this->all());
            $this->validate();
       
            if($this->updateBotBan1  || $this->updateBotBan2 || $this->updateBotBan3  ){
               
                if($this->updateBotBan1 ){
      
                            // $folderPath = public_path('upload/');
                            $folderPath1 = Storage::path('public/services-banner/');
                            
                            $imagePath1 = Storage::path('public/services-banner/'. $this->banner);
                                if(File::exists($imagePath1 ) && isset($this->banner) ){
                                    // dd($imagePath);
                                    unlink($imagePath1);
                                }
                            // dd($folderPath);
                            $image_parts1 = explode(";base64,", $this->updateBotBan1);
                            $image_type_aux1 = explode("image/", $image_parts1[0]);
                            $image_type1 = $image_type_aux1[1];
                            $image_base641 = base64_decode($image_parts1[1]);
                            $imageName1 = time().'_up_desk' . '.png';
                            $imageFullPath1 = $folderPath1.$imageName1;
                            file_put_contents($imageFullPath1, $image_base641);                
                
                                ServicesPageBanner::where('id',$this->bannerId)->update([
                                    'banner' =>    $imageName1  ?? Null,
                            ]);
                        }
                if($this->updateBotBan2 ){
          
                                    // $folderPath = public_path('upload/');
                                    $folderPath2 = Storage::path('public/services-banner/');

                                    $imagePath2 = Storage::path('public/services-banner/'. $this->tabletBanner);
                                    if(File::exists($imagePath2 ) && isset($this->tabletBanner) ){
                                        // dd($imagePath);
                                        unlink($imagePath2);
                                    }
                                    // dd($folderPath);
                                    $image_parts2 = explode(";base64,", $this->updateBotBan2);
                                    $image_type_aux2 = explode("image/", $image_parts2[0]);
                                    $image_type2 = $image_type_aux2[1];
                                    $image_base642 = base64_decode($image_parts2[1]);
                                    $imageName2 = time().'_up_tab' . '.png';
                                    $imageFullPath2 = $folderPath2.$imageName2;
                                    file_put_contents($imageFullPath2, $image_base642);                
             
                                ServicesPageBanner::where('id',$this->bannerId)->update([
                                        'tablet_banner' =>    $imageName2  ?? Null,
                                    ]);
                                }
                if($this->updateBotBan3 ){

                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/services-banner/');
                            $imagePath3 = Storage::path('public/services-banner/'. $this->mobileBanner);
                            if(File::exists($imagePath3 ) && isset($this->mobileBanner) ){
                                // dd($imagePath);
                                unlink($imagePath3);
                            }
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->updateBotBan3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_up_mob' . '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
             
                            ServicesPageBanner::where('id',$this->bannerId)->update([
                                    'mobile_banner' =>    $imageName3  ?? Null,
                                ]);
                }
     
                        $notification = array(
                            'message' => 'Service Banner Updated',
                            'alert-type' => 'info'
                        );
                  return redirect()->route('view_services_banner')->with($notification);
            }
            else 
            {
                ServicesPageBanner::where('id',$this->bannerId)->update([
                      'page_cat_id' =>    $this->pageCatId,
                     'heading' =>    $this->heading,
                    ]);
                    $notification = array(
                        'message' => 'Service Banner text Updated',
                        'alert-type' => 'success'
                    );
                 return redirect()->route('view_services_banner')->with($notification);
             }
        }
}
