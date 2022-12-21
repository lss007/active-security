<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\CompanySectionOne;
use Livewire\Component;

class ViewSectionOne extends Component
{
    public $getCompanySection1;
    public function render()
    {
                $this->getCompanySection1  = CompanySectionOne::latest()->first();
        return view('livewire.backend.pages.company.view-section-one')->layout('layouts.backend');
    }
    public function  inactive($id){
        CompanySectionOne::where('id', $id)->update([
           'status' =>    0,
       ]);
       $notification = array(
          'message' => 'Section  status is Inactive',
          'alert-type' => 'warning'
      );
      return   redirect(request()->header('Referer'))->with($notification);
     }
     public function  active($id){
        CompanySectionOne::where('id', $id)->update([
           'status' =>   1,
       
       ]);
       $notification = array(
          'message' => 'Section status is Active ',
          'alert-type' => 'success'
      );
      return   redirect(request()->header('Referer'))->with($notification);

     }
}
