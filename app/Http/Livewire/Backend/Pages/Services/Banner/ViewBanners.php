<?php

namespace App\Http\Livewire\Backend\Pages\Services\Banner;

use App\Models\PageCategory;
use App\Models\ServicesPageBanner;
use Livewire\Component;
use Livewire\WithFileUploads;
class ViewBanners extends Component
{
    use WithFileUploads;
    public $getPCategory,$pageCatId, $heading,$banner,$link ,$allBanners;

    protected $rules = [
        'pageCatId' =>'required|unique:services_page_banners,page_cat_id',
        'heading' =>'required',
        'banner' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
    ];
    protected $messages = [
        'pageCatId.required' => 'Page Category required',
        'pageCatId.unique' => 'Page Category has already been taken',

        'heading.required' => 'The Heading field is required.',
        'banner.required' => 'The Banner  field is required.',
      ];
   private function resetInputFields(){
          $this->pageCatId = '';
          $this->heading = '';
          $this->banner = '';
        }


        public function savebottombanner(){
            $this->validate();
                    if($this->banner ){

                        $fileName = time().'_'.$this->banner->getClientOriginalName();
                        $filePath = $this->banner->storeAs('services-banner', $fileName, 'public');
                    }
                        ServicesPageBanner::create([
                'page_cat_id' =>    $this->pageCatId,
                'heading' =>    $this->heading,
                'banner' =>    $fileName  ?? Null,
        
    
                ]);
                $notification = array(
                    'message' => 'Service Banner Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_services_banner')->with($notification);
        }
        public function render()
        {
            $this->getPCategory =  PageCategory::get();
            $this->allBanners =   ServicesPageBanner::
            join('page_categories' , 'services_page_banners.page_cat_id' ,'page_categories.id')
            ->select('services_page_banners.*','page_categories.page_cat_name')
            ->latest()->orderBy('created_at')->get();
            return view('livewire.backend.pages.services.banner.view-banners')->layout('layouts.backend');
        }


        
                    public function delete($id){
                    
                        ServicesPageBanner::destroy($id);
                        $notification = array(
                        'message' => 'Service Banner Deleted successfully',
                        'alert-type' => 'error'
                    );
                    return   redirect(request()->header('Referer'))->with($notification);
                    }
                 public function  inactive($id){
                    ServicesPageBanner::where('id', $id)->update([
                       'status' =>    0,
                   
                   ]);
                   $notification = array(
                      'message' => 'Service Banner  status is Inactive',
                      'alert-type' => 'warning'
                  );
                  return   redirect(request()->header('Referer'))->with($notification);
                 }
                 public function  active($id){
                    ServicesPageBanner::where('id', $id)->update([
                       'status' =>   1,
                   
                   ]);
                   $notification = array(
                      'message' => 'Service Banner  status is Active ',
                      'alert-type' => 'success'
                  );
                  return   redirect(request()->header('Referer'))->with($notification);
       
                 }
}
