<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacyMenuTab;
use App\Models\PrivacySettingTab;
use Livewire\Component;

class EditPrivacySettingsTab extends Component
{
    public $tabs=[] ,$editTabs=[],$cat,$list ,$privacytabId ,$privacyMenu;
    public $privacytab;
    public function render()
    { 
    
        return view('livewire.backend.pages.footer.privacy.tabs.edit-privacy-settings-tab')
        ->layout('layouts.backend');
    }
    public function mount($id)
    {
        if($id){
            $notification = array(
                'message' => 'Edit Work is pending ',
                'alert-type' => 'error'
            );
            return redirect()->route('view_privacy_Tabs')->with($notification);
        }
        $this->privacytabId = $id;
        $this->privacyMenu =    PrivacyMenuTab::get();
        $this->editprivacy = PrivacySettingTab::where('id', $this->privacytabId)->first();
        $this->privacytab = PrivacySettingTab::where('tab_id', $this->editprivacy->tab_id)->get();
        // dd($this->privacytab);
        $this->tabs  =  $this->editprivacy->tab_id;
        $this->cat =  $this->editprivacy->cat_id;
        $this->list =  $this->editprivacy->list;
        // foreach( $this->privacytab  as $val)
        // {
        //     $this->editTabs[$val->tab_id] = $val->tab_id;

        //     }
    }
    public function updatePrivacytab(){
        $this->validate([
            // 'tabs' => 'required',
            'cat' => 'required',
        ]);
            if($this->editTabs){ 
                $deleteprivcy=PrivacySettingTab::where('id',$this->privacytabId)->delete();  
                foreach ($this->editTabs as $service) {
                //  $deleteprivcytab=PrivacySettingTab::where('id',$this->privacytabId)->where('tab_id',$service)->delete();  
                  $UserPostServices= new PrivacySettingTab();
                  $UserPostServices->tab_id = $service;
                  $UserPostServices->cat_id = $this->cat;
                  $UserPostServices->list = $this->list;
                  $UserPostServices->save();
                }
            
            
            }else{
                    PrivacySettingTab::where('id',$this->privacytabId)->update([
                        'cat_id' =>    $this->cat,
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
