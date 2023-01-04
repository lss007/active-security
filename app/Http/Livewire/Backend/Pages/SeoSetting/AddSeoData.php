<?php

namespace App\Http\Livewire\Backend\Pages\SeoSetting;

use App\Models\SeoSetting;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddSeoData extends Component
{

    public $cropedOgImg , $title,  $description,  $keywords, $author,  $site_name,
         $og_title,  $og_description,  $og_image,  $og_image_size,  $og_image_url;
 
    protected $listeners = ['CropogImg' ];
    public function CropogImg($val){
        $this->cropedOgImg = $val;
     
    }

    public function render()
    {
        return view('livewire.backend.pages.seo-setting.add-seo-data')->layout('layouts.backend');
    }

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        // 'cropedOgImg' =>  'required', 
    ];
    // protected $messages = [
    //     // 'cropedOgImg.required'  => 'The Image field is required',

    // ]; 
    private function resetInputFields(){
                $this->title  ='';
                $this->description  ='';
            }

    public function storeSeoData(){


        $this->validate();

        if($this->cropedOgImg)  {
            // ===========  working ans stora at storage path   =========== 
                        // $folderPath3 = public_path('upload/');
                        $folderPath3 = Storage::path('public/meta/');
                        // dd($folderPath);
                        $image_parts3 = explode(";base64,", $this->cropedOgImg);
                        $image_type_aux3 = explode("image/", $image_parts3[0]);
                        $image_type3 = $image_type_aux3[1];
                        $image_base643 = base64_decode($image_parts3[1]);
                        $imageName3 = time().'_ad'. '.png';
                        $imageFullPath3 = $folderPath3.$imageName3;
                        file_put_contents($imageFullPath3, $image_base643); 
                        $image_info = getimagesize(Storage::path('public/meta/'. $imageName3));       
            // ===========  working ans stora at storage path   =========== 
        }
        SeoSetting::create([
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
                'message' => 'Seo Data Inserted',
                'alert-type' => 'success'
            );
return redirect()->route('view_seo_setting')->with($notification);
    }
 
}

