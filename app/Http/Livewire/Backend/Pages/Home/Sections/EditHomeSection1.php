<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use Livewire\Component;

use App\Models\HomeSectionOne;
use Livewire\WithFileUploads;
class EditHomeSection1 extends Component
{
    use WithFileUploads;

    public $heading,$sub_heading,$paragraph,$main_image,$logo1,$logo2,$logo3 ,$secPostId,$editHomeSec1;
    public $main_img , $logoImg1 ,$logoImg2 ,$logoImg3 ;

    public function mount($id){
        $this->secPostId = $id;
        $this->editHomeSec1 = HomeSectionOne::where('id', $this->secPostId)->first();
        $this->heading  =  $this->editHomeSec1->heading;
        $this->sub_heading =  $this->editHomeSec1->sub_heading;
        $this->paragraph =  $this->editHomeSec1->paragraph; 
        $this->main_image = $this->editHomeSec1->main_image;
        $this->logo1 = $this->editHomeSec1->logo1;
        $this->logo2 = $this->editHomeSec1->logo2;
        $this->logo3 = $this->editHomeSec1->logo3;

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

      


            
        if( $this->main_img || $this->logoImg1 || $this->logoImg2 || $this->logoImg3)  {
     
            if($this->main_img){    
                      $this->validate([
                            'main_img' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                        ]);
                $fileName1 = time().'_'.$this->main_img->getClientOriginalName();
                $filePath1 = $this->main_img->storeAs('Home-section', $fileName1, 'public');
                HomeSectionOne::where('id', $this->secPostId)->update([
                    'main_image' =>     $fileName1 ,
                 ]);
            }
             if($this->logoImg1 ){
                $this->validate([
                    'logoImg1' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $logofile1 = time().'_'.$this->logoImg1->getClientOriginalName();
                $filePath2 = $this->logoImg1->storeAs('Home-section', $logofile1, 'public');
                HomeSectionOne::where('id', $this->secPostId)->update([
                    'logo1' =>     $logofile1 ,
                 ]);
            }
            if( $this->logoImg2){
                $this->validate([
                    'logoImg2' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $logofile2 = time().'_'.$this->logoImg2->getClientOriginalName();
                $filePath3 = $this->logoImg2->storeAs('Home-section', $logofile2, 'public');
                HomeSectionOne::where('id', $this->secPostId)->update([
                    'logo2' =>     $logofile2 ,
                 ]);
            }  
            if($this->logoImg3){
                $this->validate([
                    'logoImg3' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $logofile3 = time().'_'.$this->logoImg3->getClientOriginalName();
                $filePath4 = $this->logoImg3->storeAs('Home-section', $logofile3, 'public');
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
