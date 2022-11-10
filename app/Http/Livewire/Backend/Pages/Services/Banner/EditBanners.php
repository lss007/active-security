<?php

namespace App\Http\Livewire\Backend\Pages\Services\Banner;

use App\Models\PageCategory;
use App\Models\ServicesPageBanner;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditBanners extends Component
{
    use WithFileUploads;
    public $getPCategory,$pageCatId, $heading,$banner,$link ,$allBanners,$editerviceBanner;
    public $bannerId ,$newBaner;
    public function render()
    {
        $this->getPCategory =  PageCategory::get();
        return view('livewire.backend.pages.services.banner.edit-banners')->layout('layouts.backend');
    }
    public function mount($id){
        $this->bannerId= $id;
        $this->editerviceBanner = ServicesPageBanner::where('id', $this->bannerId)->where('status',1)->first();
        $this->pageCatId  =  $this->editerviceBanner->page_cat_id;
        $this->heading =  $this->editerviceBanner->heading;
        $this->banner =  $this->editerviceBanner->banner; 
        $this->link = $this->editerviceBanner->link;
        }
        protected $rules = [
            'pageCatId' =>'required',
            'heading' =>'required',
        ];
        protected $messages = [
            'pageCatId.required' => 'Page Category required',
            'heading.required' => 'The Heading field is required.',
          ];
       private function resetInputFields(){
              $this->pageCatId = '';
              $this->heading = '';
              $this->newBaner = '';
            }
    
        public function updatebottombanner(){
            // dd($this->all());
            $this->validate();
       
            if($this->newBaner ){
                $this->validate([
                    'newBaner' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $fileName = time().'_'.$this->newBaner->getClientOriginalName();
                $filePath = $this->newBaner->storeAs('services-banner', $fileName, 'public');
                ServicesPageBanner::where('id',$this->bannerId)->update([
                    'banner' =>    $fileName  ?? Null,
                  ]);
                            $notification = array(
                                'message' => 'Service Banner Updated',
                                'alert-type' => 'info'
                            );
                  return redirect()->route('view_services_banner')->with($notification);
            }
            else 
            {
                    ServicesPageBanner::where('id',$this->bannerId)->update([
                      'page_cat_id' =>    $this->pageCatId,
                     'heading' =>    $this->heading,
                    ]);
                    $notification = array(
                        'message' => 'Service Banner text Updated',
                        'alert-type' => 'success'
                    );
                 return redirect()->route('view_services_banner')->with($notification);
             }
        }
}
