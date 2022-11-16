<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy;

use App\Models\PrivacySetting;
use App\Models\PrivacySettingTab;
use Livewire\Component;

class AddPrivacySettings extends Component
{


    public $paragraph ,$title ,$existsjPrivacy ,$tabs ,$cat,$list;


    public function render()
    {
        return view('livewire.backend.pages.footer.privacy.add-privacy-settings')->layout('layouts.backend');
    }

    public function mount(){
        $this->existsjPrivacy  = PrivacySetting::exists();
        if($this->existsjPrivacy)
        {
            $notification = array(
                'message' => 'Section already exists',
                'alert-type' => 'warning'
            );
             return redirect()->route('view_privacy_settings')->with( $notification);
         }
    }

    protected $rules = [
        'paragraph' => 'required',
        'title' => 'required',
    ];
    private function resetInputFields(){
            $this->paragraph = '';
            $this->title = '';
        }

    public function storePrivacyPara(){
            $this->validate();

                PrivacySetting::create([
                'paragraph' =>    $this->paragraph,
                'title' =>    $this->title,
                ]);

                $notification = array(
                    'message' => 'Privacy text Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_privacy_settings')->with($notification);
    }

    public function storePrivacytabs(){
        $this->validate([
            'tabs' => 'required',
            'cat' => 'required',
        ]);

        PrivacySettingTab::create([
            'tabs' =>    $this->tabs,
            'cat' =>    $this->cat,
            'list' =>    $this->list,
            ]);

            $notification = array(
                'message' => 'Privacy Tab text Published',
                'alert-type' => 'success'
            );
            return redirect()->route('view_privacy_settings')->with($notification);
    }
}
