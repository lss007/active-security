<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacyMenuTab;
use App\Models\PrivacySettingTab;
use App\Models\PrivacyWill;
use App\Models\PrivacyWillNot;
use App\Http\Livewire\Field;
use Livewire\Component;

class AddPrivacySettingsTab extends Component
{
    public $tabs ,$cat,$list,$privacyMenu ;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $this->privacyMenu =   PrivacyMenuTab::get();
        return view('livewire.backend.pages.footer.privacy.tabs.add-privacy-settings-tab')->layout('layouts.backend');
    }

    private function resetInputFields(){
        $this->tabs = '';
        $this->cat = '';
        $this->list = '';

    }

    public function storePrivacytab(){
      $valid = $this->validate([
            'tabs' => 'required',
            'cat' => 'required',
            'list.0' => 'required',
            'list.*' => 'required',
        ]);

        foreach ($this->list as $key => $value) {
            PrivacyWill::create(['tab_id' => $this->tabs,
             'cat_id' => $this->cat, 
             'list' => $this->list[$key]
            ]);
        }
            // dd( $this->tabs);
            //     if($this->tabs  && $valid ){
            //         if($this->cat == 1 ){
            //         PrivacyWill::create([
            //             'tab_id' =>  $this->tabs,
            //             'cat_id' =>  $this->cat,
            //             'list' =>    $this->list,
            //             ]);
            //         }else{
            //             PrivacyWillNot::create([
            //                 'tab_id' =>  $this->tabs,
            //                 'cat_id' =>  $this->cat,
            //                 'list' =>    $this->list,
            //                 ]);
            // }
            // if($this->cat == 1 ){
            // foreach ($this->tabs as $val) {
            //     PrivacyWill::create([
            //             'tab_id' =>    $val,
            //             'cat_id' =>    $this->cat,
            //             'list' =>    $this->list,
            //             ]);
            //     }
            // }
            //  else{
            //     foreach ($this->tabs as $val) {
            //             PrivacyWillNot::create([
            //                     'tab_id' =>    $val,
            //                     'cat_id' =>    $this->cat,
            //                     'list' =>    $this->list,
            //                     ]);
            //             }
            //     }
            $notification = array(
                'message' => 'Privacy Tab text Published',
                'alert-type' => 'success'
            );
            return redirect()->route('view_privacy_Tabs')->with($notification);
        }
       
    }

