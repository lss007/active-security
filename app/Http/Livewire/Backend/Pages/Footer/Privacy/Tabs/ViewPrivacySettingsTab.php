<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs;

use App\Models\PrivacySettingTab;
use App\Models\PrivacyWill;
use Livewire\Component;

class ViewPrivacySettingsTab extends Component
{
    public $privacyTab ;
    public function render()
    {
        $this->privacyTab =   PrivacyWill::get();
        // $this->trashdata = PrivacySettingTab::onlyTrashed()->get();
        return view('livewire.backend.pages.footer.privacy.tabs.view-privacy-settings-tab')->layout('layouts.backend');
    }

    public function delete($id){
        PrivacyWill::destroy($id);
        $notification = array(
           'message' => 'Privacy tab Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }

    public function restore($id){
        PrivacyWill::withTrashed()->find($id)->restore();
        $notification = array(
           'message' => 'Privacy tab  Restored successfully',
           'alert-type' => 'success'
        );
        return   redirect(request()->header('Referer'))->with($notification);
    }

    public function fulleDelete($id){
        PrivacyWill::onlyTrashed()->find($id)->forceDelete();
                $notification = array(
                'message' => '  Deleted successfully',
                'alert-type' => 'error'
            );
        return   redirect(request()->header('Referer'))->with($notification);
      }

    public function  inactive($id){
        PrivacyWill::where('id', $id)->update([
                'status' =>    0,
            ]);
            $notification = array(
                'message' => 'Privacy Tab  Inactive',
                'alert-type' => 'warning'
            );
        return   redirect(request()->header('Referer'))->with($notification);
        }
    public function  active($id){
        PrivacyWill::where('id', $id)->update([
                'status' =>   1,
            ]);
            $notification = array(
                'message' => 'Privacy Tab Active',
                'alert-type' => 'success'
            );
        return   redirect(request()->header('Referer'))->with($notification);

     }
}
