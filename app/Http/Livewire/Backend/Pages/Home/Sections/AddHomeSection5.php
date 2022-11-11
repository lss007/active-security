<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionFive;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddHomeSection5 extends Component
{
    use WithFileUploads;
    public $heading ,$title ,$para1 ,$para2 ,$Image ,$buttonName ,$buttonLink;


    public function mount()
    {
     $getSection5  = HomeSectionFive::exists();
     if($getSection5)
     {
         $notification = array(
             'message' => 'Section already exists',
             'alert-type' => 'warning'
         );
          return redirect()->route('ViewHomeSection5')->with( $notification);
      }
    }

    public function render()
    {
        return view('livewire.backend.pages.home.sections.add-home-section5')->layout('layouts.backend');
    }

    protected $rules = [
        'heading' => 'required|string',
        'title' => 'required|string',
        'para1' => 'required ',
        'para2' => 'required',
        'Image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
        'buttonName' => 'required',
        'buttonLink' => 'required',
        
    ];
    protected $messages = [
        
        'para1.required' => 'The paragraph field is required.',
        'para2.required' => 'The paragraph field is required.',

    
    ];  
   private function resetInputFields(){
        $this->heading = '';
        $this->title = '';
        $this->para1 = '';
        $this->para2 = '';
        $this->Image = '';
        $this->buttonName = '';
        $this->buttonLink = '';



        }

        public function saveHomeSection5(){
              // dd($this->all());
              $this->validate();
              if($this->Image)  
              {
                  $this->validate([
                       'Image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040',
                       ]);
                  $fileName1 = time().'_'.$this->Image->getClientOriginalName();
                  $filePath1 = $this->Image->storeAs('Home-section', $fileName1, 'public');
              }
  
              HomeSectionFive::create([
                      'heading' =>    $this->heading,
                      'title' =>    $this->title,
                      'para1' =>    $this->para1,
                      'para2' =>     $this->para2 ,
                      'button_name' =>    $this->buttonName ?? Null,
                      'button_link' =>   $this->buttonLink ?? Null,
                      'image' =>   $fileName1  ?? Null,
                    ]);
  
          $notification = array(
              'message' => 'Home last Section  Published',
              'alert-type' => 'success'
          );
  return redirect()->route('ViewHomeSection5')->with($notification);
  
        }
}

