<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;
use App\Models\HomeSectionFive;
use Illuminate\Support\Facades\Storage;
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
    public $newImg ,$edittHomeImg5;



    

    protected $listeners = ['editSecImg5'];
        
    public function editSecImg5($val){   

               $this->edittHomeImg5 = $val;
         
           }


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

        $getSection1  = HomeSectionFive::where('id', $this->postId)->where('status',Null)->exists();
        if($getSection1)
        {
            $notification = array(
                'message' => 'Access denied ',
                'alert-type' => 'error'
            );
             return redirect()->route('ViewHomeSection5')->with( $notification);
         }


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
            
             if($this->edittHomeImg5)  
             {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-section/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->edittHomeImg5);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time() .'_edit' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
                    // ===========  working ans stora at storage path   =========== 

                 HomeSectionFive::where('id',$this->postId )->update([
            
                    'image' =>   $imageName  ?? Null,
                  ]);

            $notification = array(
            'message' => 'Home last Section  Updated',
            'alert-type' => 'info' );
             return redirect()->route('ViewHomeSection5')->with($notification);
             }
             else {
                //  $this->validate();
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
