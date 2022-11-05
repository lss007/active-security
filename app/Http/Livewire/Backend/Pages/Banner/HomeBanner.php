<?php

namespace App\Http\Livewire\Backend\Pages\Banner;

use App\Models\HomeBanner as ModelsHomeBanner;
use Livewire\Component;

use function PHPUnit\Framework\fileExists;

class HomeBanner extends Component
{
    public $viewHomeBanner;

    public function render()
    {
        $this->viewHomeBanner = ModelsHomeBanner::get();
        return view('livewire.backend.pages.banner.home-banner')->layout('layouts.backend');
    }
    public function deletebanner($id){
        
     ModelsHomeBanner::destroy($id);
     $notification = array(
        'message' => 'Home Banner Deleted successfully',
        'alert-type' => 'error'
    );
    return   redirect(request()->header('Referer'))->with($notification);
    }


          public function  inactive($id){
            ModelsHomeBanner::where('id', $id)->update([
                'status' =>    0,
            
            ]);
            $notification = array(
               'message' => 'Home Banner status is Inactive',
               'alert-type' => 'warning'
           );
           return   redirect(request()->header('Referer'))->with($notification);
          }
          public function  active($id){
            ModelsHomeBanner::where('id', $id)->update([
                'status' =>   1,
            
            ]);
            $notification = array(
               'message' => 'Home Banner status is Active ',
               'alert-type' => 'success'
           );
           return   redirect(request()->header('Referer'))->with($notification);

          }
}
