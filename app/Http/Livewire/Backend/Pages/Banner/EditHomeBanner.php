<?php

namespace App\Http\Livewire\Backend\Pages\Banner;

use App\Models\HomeBanner;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeBanner extends Component
{
    use WithFileUploads;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph ;
    public $new_Image ,$homeBannerId;
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
            if($this->new_Image){
                $fileName = time().'_'.$this->new_Image->getClientOriginalName();
                $filePath = $this->new_Image->storeAs('Home-banner', $fileName, 'public');
                HomeBanner::where('id',  $this->homeBannerId)->update([
                            'banner_image' =>    $fileName,
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
