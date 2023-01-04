<?php

namespace App\Http\Livewire\Backend\Pages\SeoSetting;

use App\Models\SeoSetting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EditSeoData extends Component
{

    public $cropedOgImg , $title,  $description,  $keywords, $author,  $site_name,
            $og_title,  $og_description,  $og_image,  $og_image_size,  $og_image_url;
    public $editSeoData ,$seoId;
    protected $listeners = ['updateogImg' ];
    
    public function updateogImg($val){
        $this->cropedOgImg = $val;

        }
    protected $rules = [
            'title' => 'required',
            'description' => 'required',
            // 'cropedOgImg' =>  'required', 
        ];
    // protected $messages = [
    //         'cropedOgImg.required'  => 'The Image field is required',
    //     ]; 
    private function resetInputFields(){
                    $this->title  ='';
                    $this->description  ='';
                }

    public function mount( $id){
        $this->seoId = $id;
        $this->editSeoData= SeoSetting::where('id', $this->seoId)->first();
    if( $this->editSeoData != Null){
     $this->title  =  $this->editSeoData->title;
     $this->description  = $this->editSeoData->description;
     $this->keywords  = $this->editSeoData->keywords;
     $this->author  = $this->editSeoData->author;
     $this->site_name  = $this->editSeoData->site_name;
     $this->og_title =  $this->editSeoData->og_title;
     $this->og_description  = $this->editSeoData->og_description;
     $this->og_image  = $this->editSeoData->og_image;
     $this->og_image_size  = $this->editSeoData->og_image_size;
     $this->og_image_url  = $this->editSeoData->og_image_url;
        }else 
        {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_seo_setting')->with($notification);
        }
    }
    public function render()
    {
        return view('livewire.backend.pages.seo-setting.edit-seo-data')->layout('layouts.backend');
    }

    public function updateSeoData(){
        $this->validate();
        if($this->cropedOgImg)  {
            // ===========  working ans stora at storage path   =========== 
                        // $folderPath3 = public_path('upload/');
            $folderPath3 = Storage::path('public/meta/');
            // dd($folderPath);
            if($this->og_image){
                $imagePath3 = Storage::path('public/meta/'. $this->og_image);
                    if(File::exists($imagePath3) ){
                        unlink($imagePath3);
                    }
                }
            $image_parts3 = explode(";base64,", $this->cropedOgImg);
            $image_type_aux3 = explode("image/", $image_parts3[0]);
            $image_type3 = $image_type_aux3[1];
            $image_base643 = base64_decode($image_parts3[1]);
            $imageName3 = time().'_ad'. '.png';
            $imageFullPath3 = $folderPath3.$imageName3;
            file_put_contents($imageFullPath3, $image_base643);    
            $image_info = getimagesize(Storage::path('public/meta/'. $imageName3));  
            
            // ===========  working ans stora at storage path   =========== 
            SeoSetting::where('id',$this->seoId)->update([
                'title' =>      $this->title,
                'description' => $this->description  ?? NULL,
                'keywords' => $this->keywords  ?? NULL,
                'author' => $this->author  ?? NULL,
                'site_name' => $this->site_name  ?? NULL,
                'og_title' => $this->og_title  ?? NULL,
                'og_description' => $this->og_description  ?? NULL,
                'og_image' => $imageName3  ?? NULL,
                'og_image_size' => $image_info[3]  ?? NULL,
                'og_image_url' => $this->og_image_url  ?? NULL,
    
            ]);
    
                $notification = array(
                    'message' => 'Seo Data updated',
                    'alert-type' => 'info'
                );
    return redirect()->route('view_seo_setting')->with($notification);
        }else{
            SeoSetting::where('id',$this->seoId)->update([
                'title' =>      $this->title,
                'description' => $this->description  ?? NULL,
                'keywords' => $this->keywords  ?? NULL,
                'author' => $this->author  ?? NULL,
                'site_name' => $this->site_name  ?? NULL,
                'og_title' => $this->og_title  ?? NULL,
                'og_description' => $this->og_description  ?? NULL,
         
                'og_image_size' => $this->og_image_size  ?? NULL,
                'og_image_url' => $this->og_image_url  ?? NULL,
    
            ]);
    
                $notification = array(
                    'message' => 'Seo Data Updated',
                    'alert-type' => 'info'
                );
    return redirect()->route('view_seo_setting')->with($notification);
        }

    }
}
