<?php

namespace App\Http\Livewire\Backend\Pages\Banner;

use App\Models\HomeBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeBanner extends Component
{
    use WithFileUploads;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph ;
    public $new_Image ,$homeBannerId ,$editcropedImg; 
    public function mount($id){
            $this->homeBannerId= $id;
            $this->editHomeBanner = HomeBanner::where('id', $this->homeBannerId)->first();
            $this->Heading =  $this->editHomeBanner->heading; 
            $this->Title  =  $this->editHomeBanner->title;
            $this->BannerParagaph = $this->editHomeBanner->banner_paragaph;
            $this->bannerImage = $this->editHomeBanner->banner_image;
            $this->buttonText = $this->editHomeBanner->button_text	;
            $this->button_link = $this->editHomeBanner->button_link;


            

 }

 

 protected $listeners = ['editHomeBannerImg'];
 
 public function editHomeBannerImg($val){       
    $this->editcropedImg = $val;
// dd($this->cropedImg);
}


    public function render()
    {
        return view('livewire.backend.pages.banner.edit-home-banner')->layout('layouts.backend');
    }
    protected $rules = [
        'Heading' => 'required',
        'Title' => 'required',
        'BannerParagaph' => 'required', 
    
    ];
    private function resetInputFields(){
        $this->Title = '';
        $this->Heading = '';
        $this->BannerParagaph = '';
        }
    public function updateHomeBanner(){
        // dd($this->all());
            $this->validate();
         
            if($this->editcropedImg){
                   // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-banner/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->editcropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = uniqid() . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
                // $fileName = time().'_'.$this->new_Image->getClientOriginalName();
                // $filePath = $this->new_Image->storeAs('Home-banner', $fileName, 'public');
                HomeBanner::where('id',  $this->homeBannerId)->update([
                            'banner_image' =>   $imageName ,
                            ]);
                        $notification = array(
                            'message' => 'Banner image Updated',
                            'alert-type' => 'info'
                        );
                        return redirect()->route('viewHomebanner')->with($notification);
            }else{
                HomeBanner::where('id',  $this->homeBannerId)->update([
                        'heading' =>    $this->Heading,
                        'title' =>    $this->Title,
                        'banner_paragaph' =>    $this->BannerParagaph,
                        'button_text' =>    $buttonText  ?? Null,
                        'button_link' =>    $this->button_link,

                ]);
                    $notification = array(
                        'message' => 'Banner Text updated Updated',
                        'alert-type' => 'success'
                    );
                return redirect()->route('viewHomebanner')->with($notification);
            }
        
        }
}
