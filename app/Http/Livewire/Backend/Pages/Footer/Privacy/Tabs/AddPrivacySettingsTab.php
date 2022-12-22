<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacyMenuTab;
use App\Models\PrivacySettingTab;
use Livewire\Component;

class AddPrivacySettingsTab extends Component
{
    public $tabs ,$cat,$list,$privacyMenu ,$alltab;
    public function render()
    {
            $this->privacyMenu =    PrivacyMenuTab::get();
        return view('livewire.backend.pages.footer.privacy.tabs.add-privacy-settings-tab')->layout('layouts.backend');
    }

    public function storePrivacytab(){
        $this->validate([
            'list' => 'required',
            // 'cat' => 'required',
        ]);

        PrivacySettingTab::create([
            // 'tabs' =>    $this->alltab ?? Null,
            // 'cat' =>    $this->cat,
            'list' =>    $this->list,
            ]);

            $notification = array(
                'message' => 'Privacy Tab text Published',
                'alert-type' => 'success'
            );
            return redirect()->route('view_privacy_Tabs')->with($notification);
    }
}
