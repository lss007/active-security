<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Logos;

use App\Models\FooterLogo;
use Livewire\Component;
use Livewire\WithFileUploads;
class ViewFooterLogo extends Component
{
    use WithFileUploads;
    Public $get_logo ,$name ,$logo_img;
    public function render()
    {
       $this->get_logo =  FooterLogo::get();
        return view('livewire.backend.pages.footer.logos.view-footer-logo')->layout('layouts.backend');
    }
    protected $rules = [
        'name' =>'required',
        'logo_img.*' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];

   private function resetInputFields(){
          $this->name = '';
          $this->logo_img = '';
   
        }

        public function saveFooterlogo(){
            $this->validate();
            if($this->logo_img > 1)  
            {
                foreach ($this->logo_img as  $img) 
                {
                        $fileName = time().'_'.$img->getClientOriginalName();
                        $filePath = $img->storeAs('footer-logo', $fileName, 'public');

                            FooterLogo::create([
                                'name' =>    $this->name,
                                'logo_img' =>    $fileName,

                            ]);
                    }
                     $notification = array(
                    'message' => 'Home Multiple Logo Published',
                    'alert-type' => 'info'
                );
                return redirect()->route('view_footer_logos')->with($notification);
        
          
            }else {
                        $fileName = time().'_'.$this->logo_img->getClientOriginalName();
                        $filePath = $this->logo_img->storeAs('footer-logo', $fileName, 'public');

                            FooterLogo::create([
                                'name' =>    $this->name,
                                'logo_img' =>    $fileName,

                            ]);
               
                     $notification = array(
                    'message' => 'Home Logo Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_footer_logos')->with($notification);
            }
        }


        public function delete($id){
        
            FooterLogo::destroy($id);
            $notification = array(
               'message' => 'Footer logo Deleted successfully',
               'alert-type' => 'error'
           );
           return   redirect(request()->header('Referer'))->with($notification);
           }
       
       
                 public function  inactive($id){
                    FooterLogo::where('id', $id)->update([
                       'status' =>    0,
                   
                   ]);
                   $notification = array(
                      'message' => 'Footer logo  status is Inactive',
                      'alert-type' => 'warning'
                  );
                  return   redirect(request()->header('Referer'))->with($notification);
                 }
                 public function  active($id){
                    FooterLogo::where('id', $id)->update([
                       'status' =>   1,
                   
                   ]);
                   $notification = array(
                      'message' => 'Footer logo  status is Active ',
                      'alert-type' => 'success'
                  );
                  return   redirect(request()->header('Referer'))->with($notification);
       
                 }
}
