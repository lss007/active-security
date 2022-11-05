<?php

namespace App\Http\Livewire\Backend\Pages\Banner;

use App\Models\HomeBanner;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeBanner extends Component
{
    use WithFileUploads;
public $hBannerId ,$editHomeBanner, $mainTitle,$mainSubTitle ,$heading ,$bannerImage  ,$banner_Image,$buttonText,$bannerParagaph ;
    public function mount($id){
            $this->hBannerId= $id;
            $this->editHomeBanner = HomeBanner::where('id', $this->hBannerId)->where('status',1)->first();
            $this->mainTitle  =  $this->editHomeBanner->main_title;
            $this->mainSubTitle =  $this->editHomeBanner->main_sub_title;
            $this->heading =  $this->editHomeBanner->heading; 
            $this->bannerImage = $this->editHomeBanner->banner_image;
            $this->buttonText = $this->editHomeBanner->button_text	;
            $this->bannerParagaph = $this->editHomeBanner->banner_paragaph;

 }
    public function render()
    {
        return view('livewire.backend.pages.banner.edit-home-banner')->layout('layouts.backend');
    }
    protected $rules = [
        'mainTitle' => 'required',
        'mainSubTitle' => 'required',
        'heading' => 'required',
        'bannerParagaph' => 'required', 
    
    ];
    private function resetInputFields(){
        $this->mainTitle = '';
        $this->mainSubTitle = '';
        $this->heading = '';
        $this->bannerParagaph = '';
        }
    public function updateHomeBanner(){
        // dd($this->all());
            $this->validate();
            if($this->banner_Image){
                $fileName = time().'_'.$this->banner_Image->getClientOriginalName();
                $filePath = $this->banner_Image->storeAs('Home-banner', $fileName, 'public');
                HomeBanner::where('id',  $this->hBannerId)->update([
                            'banner_image' =>    $fileName,
                            ]);
                        $notification = array(
                            'message' => 'Banner image Updated',
                            'alert-type' => 'info'
                        );
                        return redirect()->route('viewHomebanner')->with($notification);
            }else{
                HomeBanner::where('id',  $this->hBannerId)->update([
                        'main_title' =>    $this->mainTitle,
                        'main_sub_title' =>    $this->mainSubTitle,
                        'heading' =>    $this->heading,
                        'banner_paragaph' =>    $this->bannerParagaph,
                ]);
                    $notification = array(
                        'message' => 'Banner Text updated Updated',
                        'alert-type' => 'success'
                    );
                return redirect()->route('viewHomebanner')->with($notification);
            }
        
        }
}
