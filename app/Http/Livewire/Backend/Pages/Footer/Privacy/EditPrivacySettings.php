<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy;

use App\Models\PrivacySetting;
use Livewire\Component;

class EditPrivacySettings extends Component
{
    public $paragraph ,$title ,$privacyId;
    public function render()
    {
        return view('livewire.backend.pages.footer.privacy.edit-privacy-settings')->layout('layouts.backend');
    }
    public function mount($id){
        $this->privacyId = $id;
        $this->editprivacy= PrivacySetting::where('id', $this->privacyId)->first();
        $this->paragraph  =  $this->editprivacy->paragraph;
        $this->title =  $this->editprivacy->title;
    }
    protected $rules = [
        'paragraph' => 'required',
        'title' => 'required',
    ];
    private function resetInputFields(){
            $this->paragraph = '';
            $this->title = '';
        }

        public function updatePrivacyPara(){
            $this->validate();

            PrivacySetting::where('id', $this->privacyId)->update([
            'paragraph' =>    $this->paragraph,
            'title' =>    $this->title,
            ]);

            $notification = array(
                'message' => 'Privacy Setting Text Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('view_privacy_settings')->with($notification);
        }
}
