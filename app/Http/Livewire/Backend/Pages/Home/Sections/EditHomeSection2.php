<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use Livewire\Component;
use App\Models\HomeSectionTwo;
use Livewire\WithFileUploads;
class EditHomeSection2 extends Component
{
    use WithFileUploads;
    public $postId, $heading ,$title ,$para1 ,$para2 ,$Image ,$buttonName ,$buttonLink;
public $newImg;
    public function mount($id){
        $this->postId = $id;

        $this->editHomeSec2 = HomeSectionTwo::where('id', $this->postId)->first();
        $this->heading  =  $this->editHomeSec2->heading;
        $this->title =  $this->editHomeSec2->title;
        $this->para1 =  $this->editHomeSec2->para1; 
        $this->para2 = $this->editHomeSec2->para2;
        $this->Image = $this->editHomeSec2->image;
        $this->buttonName = $this->editHomeSec2->button_name;
        $this->buttonLink = $this->editHomeSec2->button_link;



    }


    public function render()
    {
        return view('livewire.backend.pages.home.sections.edit-home-section2')->layout('layouts.backend');
    }




    protected $rules = [
        'heading' => 'required|string',
        'title' => 'required|string',
        'para1' => 'required ',
        'para2' => 'required',

        // 'buttonName' => 'required',
        // 'buttonLink' => 'required',
        
    ];
    protected $messages = [
        
        'para1.required' => 'The paragraph  field is required.',
        'para2.required' => 'The paragraph  field is required.',

    
    ];  
   private function resetInputFields(){
        $this->heading = '';
        $this->title = '';
        $this->para1 = '';
        $this->para2 = '';
        $this->buttonName = '';
        $this->buttonLink = '';



        }
        public function updateHomeSection2(){
            // dd($this->all());
            $this->validate();
            if($this->newImg)  
            {
                $this->validate([
                     'newIng' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040',
                     ]);
                $fileName1 = time().'_'.$this->newImg->getClientOriginalName();
                $filePath1 = $this->newImg->storeAs('Home-section', $fileName1, 'public');
                HomeSectionTwo::where('id', $this->postId)->update([
            
                    'image' =>   $fileName1  ?? Null,
                  ]);

                    $notification = array(
                        'message' => 'Home Section 2 updated',
                        'alert-type' => 'info'
                    );
                return redirect()->route('viewHomeSection2')->with($notification);
            }else {
                HomeSectionTwo::where('id', $this->postId)->update([
                    'heading' =>    $this->heading,
                    'title' =>    $this->title,
                    'para1' =>    $this->para1,
                    'para2' =>     $this->para2 ,
                    'button_name' =>    trim($this->buttonName),
                    'button_link' =>  trim( $this->buttonLink),
                
                  ]);

                        $notification = array(
                            'message' => 'Home Section 2 updated',
                            'alert-type' => 'success'
                        );
                return redirect()->route('viewHomeSection2')->with($notification);
         }
    }
}
