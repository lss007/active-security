<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacySettingTab;
use Livewire\Component;

class ViewPrivacySettingsTab extends Component
{
    public $privacyTab ;
    public function render()
    {
        $this->privacyTab =   PrivacySettingTab::get();
        return view('livewire.backend.pages.footer.privacy.tabs.view-privacy-settings-tab')->layout('layouts.backend');
    }
}
