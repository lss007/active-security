<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;
use App\Models\HomeSectionFive;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeSection5 extends Component
{
    public function render()
    {
        return view('livewire.backend.pages.home.sections.edit-home-section5')->layout('layouts.backend');
    }
    use WithFileUploads;
    public $postId, $heading ,$title ,$para1 ,$para2 ,$Image ,$buttonName ,$buttonLink;
public $newImg;
    public function mount($id){
        $this->postId = $id;

        $this->editHomeSec5 = HomeSectionFive::where('id', $this->postId)->first();
        $this->heading  =  $this->editHomeSec5->heading;
        $this->title =  $this->editHomeSec5->title;
        $this->para1 =  $this->editHomeSec5->para1; 
        $this->para2 = $this->editHomeSec5->para2;
        $this->Image = $this->editHomeSec5->image;
        $this->buttonName = $this->editHomeSec5->button_name;
        $this->buttonLink = $this->editHomeSec5->button_link;



    }
    protected $rules = [
        'heading' => 'required|string',
        'title' => 'required|string',
        'para1' => 'required ',
        'para2' => 'required',
        'buttonName' => 'required',
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

        public function update_HomeSection5(){
            //  dd($this->all());
             $this->validate();
             if($this->newImg)  
             {
                 $this->validate([
                      'newImg' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040',
                      ]);
                 $fileName1 = time().'_'.$this->newImg->getClientOriginalName();
                 $filePath1 = $this->newImg->storeAs('Home-section', $fileName1, 'public');
                 HomeSectionFive::where('id',$this->postId )->update([
                    'heading' =>    $this->heading,
                    'title' =>    $this->title,
                    'para1' =>    $this->para1,
                    'para2' =>     $this->para2 ,
                    'button_name' =>    $this->buttonName ?? Null,
                    'button_link' =>   $this->buttonLink ?? Null,
                    'image' =>   $fileName1  ?? Null,
                  ]);

            $notification = array(
            'message' => 'Home last Section  Updated',
            'alert-type' => 'info' );
             return redirect()->route('ViewHomeSection5')->with($notification);
             }
             else {
                HomeSectionFive::where('id',$this->postId )->update([
                    'heading' =>    $this->heading,
                    'title' =>    $this->title,
                    'para1' =>    $this->para1,
                    'para2' =>     $this->para2 ,
                    'button_name' =>    trim($this->buttonName),
                    'button_link' =>  trim( $this->buttonLink ),
                   
                  ]);

                    $notification = array(
                    'message' => 'Home last Section  Updated',
                    'alert-type' => 'success' );
            return redirect()->route('ViewHomeSection5')->with($notification);
             }
 
        
 
        }
}
