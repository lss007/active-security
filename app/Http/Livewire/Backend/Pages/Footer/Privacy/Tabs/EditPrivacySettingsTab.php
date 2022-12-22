<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacyMenuTab;
use App\Models\PrivacySettingTab;
use Livewire\Component;

class EditPrivacySettingsTab extends Component
{
    public $tabs=[] ,$edittabs,$cat,$list ,$privacytabId ,$privacyMenu;
    public function render()
    {
    return view('livewire.backend.pages.footer.privacy.tabs.edit-privacy-settings-tab')->layout('layouts.backend');
    }

    public function mount($id){
        $this->privacytabId = $id;
        $this->privacyMenu =    PrivacyMenuTab::get();
   
        $this->editprivacy= PrivacySettingTab::where('id', $this->privacytabId)->first();
        $this->tabs  =  $this->editprivacy->tabs;
        $this->cat =  $this->editprivacy->cat;
        $this->list =  $this->editprivacy->list;

            // foreach( $this->privacyMenu  as $val){
      
            //         $this->edittabs[$val->id] = $val->id;
                
            // }
    }
    public function updatePrivacytab(){
   
        $this->validate([
            // 'tabs' => 'required',
            'cat' => 'required',
        ]);
     
            if($this->edittabs){ 
                $deleteServices=PrivacySettingTab::where('id',$this->privacytabId)->delete(); 
                foreach ($this->edittabs as $service) {
                  $UserPostServices= new PrivacySettingTab();
                  $UserPostServices->tabs = $service;
                  $UserPostServices->cat = $this->cat;
                  $UserPostServices->list = $this->list;
                  $UserPostServices->save();
                }
            
            }else{
                
                    PrivacySettingTab::where('id',$this->privacytabId)->update([
                        'cat' =>    $this->cat,
                        'list' =>    $this->list,
                        ]);
             
            }
           

            $notification = array(
                'message' => 'Privacy Tab text Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('view_privacy_Tabs')->with($notification);

    }
}
