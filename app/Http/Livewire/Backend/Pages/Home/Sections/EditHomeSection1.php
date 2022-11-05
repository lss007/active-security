<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use Livewire\Component;

use App\Models\HomeSectionOne;
use Livewire\WithFileUploads;
class EditHomeSection1 extends Component
{
    use WithFileUploads;

    public $heading,$sub_heading,$paragraph,$main_image,$logo1,$logo2,$logo3 ,$secPostId,$editHomeSec1;

    public function mount($id){
        $this->secPostId = $id;
        $this->editHomeSec1 = HomeSectionOne::where('id', $this->secPostId)->first();
        $this->heading  =  $this->editHomeSec1->heading;
        $this->sub_heading =  $this->editHomeSec1->sub_heading;
        $this->paragraph =  $this->editHomeSec1->paragraph; 
        $this->main_image = $this->editHomeSec1->main_image;
        $this->logo1 = $this->editHomeSec1->logo1	;
        $this->logo2 = $this->editHomeSec1->logo2;
        $this->logo3 = $this->editHomeSec1->logo3;

    }

    protected $rules = [
        'heading' => 'required',
        'sub_heading' => 'required',
        'paragraph' => 'required',
        // 'main_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp', 
        // 'logo1' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
        // 'logo2' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
        // 'logo3' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];

   private function resetInputFields(){
        $this->heading = '';
        $this->sub_heading = '';
        $this->paragraph = '';
        // $this->main_image = '';
        // $this->logo1 = '';
        // $this->logo2 = '';
        // $this->logo3 = '';
        }
    public function render()
    {
        return view('livewire.backend.pages.home.sections.edit-home-section1')->layout('layouts.backend');
    }

    public function updateHomeSection1(){
        // dd($this->all());
        // $this->validate();

        // if($this->main_image)  {
        //     $this->validate([
        //         'main_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
        //     ]);
        //     $fileName1 = time().'_'.$this->main_image->getClientOriginalName();
        //     $filePath1 = $this->main_image->storeAs('Home-section', $fileName1, 'public');
        // }
        // if($this->logo1)  {
        //     $this->validate([
        //         'logo1' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
        //     ]);
        //     $logoimg1 = time().'_'.$this->logo1->getClientOriginalName();
        //     $filePath2 = $this->logo1->storeAs('Home-section', $logoimg1, 'public');
        // }

        // if($this->logo3)  {
        //     $this->validate([
        //         'logo2' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
        //     ]);
        //     $logoimg2 = time().'_'.$this->logo2->getClientOriginalName();
        //     $filePath3 = $this->logo2->storeAs('Home-section', $logoimg2, 'public');
        // }

        // if($this->logo3)  {
        //     $this->validate([
        //         'logo3' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
        //     ]);
        //     $logoimg3 = time().'_'.$this->logo3->getClientOriginalName();
        //     $filePath4 = $this->logo3->storeAs('Home-section', $logoimg3, 'public');
        // }
             HomeSectionOne::where('id', $this->secPostId)->update([
                    'heading' =>    $this->heading,
                    'sub_heading' =>    $this->sub_heading,
                    'paragraph' =>    $this->paragraph,
                    // 'main_image' =>     $fileName1 ,
                    // 'logo1' =>    $logoimg1 ?? Null,
                    // 'logo2' =>   $logoimg2 ?? Null,
                    // 'logo3' =>    $logoimg3 ?? Null,
            ]);
         
            $notification = array(
                'message' => 'Home Section updated successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manageHomeSection1')->with($notification);

    }
}
