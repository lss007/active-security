<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\CompanySectionOne;
use Livewire\Component;

class AddSectionOne extends Component
{
    public $heading ,$title ,$para1 ,$title2 ,$para2 ,$para3,$para4 ;
 
   public function mount()
   {
    $getCompanySection1  = CompanySectionOne::exists();
    if($getCompanySection1)
    {
        $notification = array(
            'message' => 'Section already exists',
            'alert-type' => 'warning'
        );
         return redirect()->route('view_company_sections')->with( $notification);
     }
   }
   
    public function render()
    {
    
            return view('livewire.backend.pages.company.add-section-one')->layout('layouts.backend');
        }
            
    protected $rules = [
        'heading' => 'required',
        'title' => 'required',
        'para1' => 'required',
        'title2' => 'required',
        'para2' => 'required',
        'para3' => 'required',
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
        'title2.required' => 'The second title field is required.',
        'para2.required' => 'The paragraph field is required.',
        'para3.required' => 'The paragraph field is required.',

    ];  
    public function storecompanySection(){
        $this->validate();

        CompanySectionOne::create([
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
