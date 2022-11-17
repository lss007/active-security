<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacySettingTab;
use Livewire\Component;

class EditPrivacySettingsTab extends Component
{
    public $tabs ,$cat,$list ,$privacytabId;
    public function render()
    {
        return view('livewire.backend.pages.footer.privacy.tabs.edit-privacy-settings-tab')->layout('layouts.backend');
    }

    public function mount($id){
        $this->privacytabId = $id;
        $this->editprivacy= PrivacySettingTab::where('id', $this->privacytabId)->first();
        $this->tabs  =  $this->editprivacy->tabs;
        $this->cat =  $this->editprivacy->cat;
        $this->list =  $this->editprivacy->list;

    }
    public function updatePrivacytab(){
        $this->validate([
            'tabs' => 'required',
            'cat' => 'required',
        ]);

        PrivacySettingTab::where('id',$this->privacytabId)->update([
            'tabs' =>    $this->tabs,
            'cat' =>    $this->cat,
            'list' =>    $this->list,
            ]);

            $notification = array(
                'message' => 'Privacy Tab text Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('view_privacy_Tabs')->with($notification);

    }
}
