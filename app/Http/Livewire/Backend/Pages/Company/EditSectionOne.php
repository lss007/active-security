<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use Livewire\Component;
use App\Models\CompanySectionOne;
class EditSectionOne extends Component
{
    public $sec_Id, $editcompanySec1, $heading ,$title ,$para1 ,$title2 ,$para2 ,$para3,$para4 ;
    public function render()
    {
        return view('livewire.backend.pages.company.edit-section-one')->layout('layouts.backend');
    }
    public function mount($id){
        $this->sec_Id = $id;
        $this->editcompanySec1 = CompanySectionOne::where('id', $this->sec_Id)->first();
        $this->heading  =  $this->editcompanySec1->heading;
        $this->title =  $this->editcompanySec1->title;
        $this->para1 =  $this->editcompanySec1->para1; 
        $this->title2 = $this->editcompanySec1->title2;
        $this->para2 = $this->editcompanySec1->para2;
        $this->para3 = $this->editcompanySec1->para3;
        $this->para4 = $this->editcompanySec1->para4;

    }

    protected $rules = [
        'heading' => 'required',
        'title' => 'required',
        'para1' => 'required|max:400',
        'title2' => 'required',
        'para2' => 'required ',
        'para3' => 'required' ,
    ];
   private function resetInputFields(){
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';
            $this->title2  ='';
            $this->para2  ='';
            $this->para3  ='';
  
        }
        protected $messages = [
            'para1.required' => 'The paragraph field is required.',
            'para1.max' => 'The paragraph must not be greater than 400 characters.',
            'title2.required' => 'The second title field is required.',
            'para2.required' => 'The paragraph 2 field is required.',
            'para3.required' => 'The paragraph 3 field is required.',
           
        ];  

        public function updatecompanySection1(){
            $this->validate();

            CompanySectionOne::where('id',$this->sec_Id)->update([
                'heading' =>    $this->heading,
                'title' =>    $this->title,
                'para1' =>    $this->para1,
                'title2' =>    $this->title2,
                'para2' =>    $this->para2,
                'para3' =>    $this->para3,
                 ]);
    
        $notification = array(
            'message' => 'Company Section Published',
            'alert-type' => 'success'
        );
        return redirect()->route('view_company_sections')->with($notification);
        }
}
