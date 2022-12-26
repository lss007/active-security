<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacyMenuTab;
use App\Models\PrivacySettingTab;
use App\Models\PrivacyWill;
use Livewire\Component;

class EditPrivacySettingsTab extends Component
{
    public $tabs=[] ,$cat,$list ,$privacytabId ,$privacyMenu;
    public $privacytab;
    public function render()
    { 
    
        return view('livewire.backend.pages.footer.privacy.tabs.edit-privacy-settings-tab')
        ->layout('layouts.backend');
    }
    public function mount($id)
    {
     
        $this->privacytabId = $id;
        $this->privacyMenu =    PrivacyMenuTab::get();
        $this->editprivacy = PrivacyWill::where('id', $this->privacytabId)->first();
        if( $this->editprivacy != Null){
            $this->tabs  =  $this->editprivacy->tab_id;
            $this->cat =  $this->editprivacy->cat_id;
            $this->list =  $this->editprivacy->list;
        }
        else {
            $notification = array(
                'message' => 'Not Avilable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_privacy_Tabs')->with($notification);
        }

    
    }
    public function updatePrivacytab(){
        $this->validate([
            // 'tabs' => 'required',
            'cat' => 'required',
            'list' => 'required',
        ]);
        
                 PrivacyWill::where('id',$this->privacytabId)->update([
                        'tab_id' =>    $this->tabs,
                        'cat_id' =>    $this->cat,
                        'list' =>    $this->list,
                        ]);
     
            $notification = array(
                'message' => 'Privacy Tab text Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('view_privacy_Tabs')->with($notification);

    }
}
