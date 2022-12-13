<?php

namespace App\Http\Livewire\Backend\Pages\Services\Banner;

use App\Models\PageCategory;
use App\Models\ServicesPageBanner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ViewBanners extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $getPCategory,$pageCatId, $heading,$banner,$link ,$trashdata;
    private   $allBanners ;

    public $getBottomBanner1, $getBottomBanner2,$getBottomBanner3 ,$search='' ;

    protected $listeners = ['addBottomBanner1' ,'addBottomBanner2','addBottomBanner3'];
        
    public function addBottomBanner1($val){       
            $this->getBottomBanner1 = $val;
     
        }
        public function addBottomBanner2($val){       
            $this->getBottomBanner2 = $val;
          
        }
        public function addBottomBanner3($val){       
            $this->getBottomBanner3 = $val;
            // dd( $this->getBottomBanner3);
        }

    protected $rules = [
        'pageCatId' =>'required|unique:services_page_banners,page_cat_id',
        'heading' =>'required',
        'getBottomBanner1' =>  'required', 
        'getBottomBanner2' =>  'required', 
        'getBottomBanner3' =>  'required', 

    ];
    protected $messages = [
        'pageCatId.required' => 'Page Category required',
        'pageCatId.unique' => 'Page Category has already been taken',
        'heading.required' => 'The Heading field is required.',
    
        'getBottomBanner1.required' => 'The Desktop Image field is required',
        'getBottomBanner2.required' => 'The Tablet Image field is required',
        'getBottomBanner3.required' => 'The Mobile Image field is required',
      ];
   private function resetInputFields(){
          $this->pageCatId = '';
          $this->heading = '';
          $this->banner = '';
        }


    public function savebottombanner(){
            // $this->validate();
                if($this->getBottomBanner1 ){
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath1 = Storage::path('public/services-banner/');
                            // dd($folderPath);
                            $image_parts1 = explode(";base64,", $this->getBottomBanner1);
                            $image_type_aux1 = explode("image/", $image_parts1[0]);
                            $image_type1 = $image_type_aux1[1];
                            $image_base641 = base64_decode($image_parts1[1]);
                            $imageName1 = time().'_desk' . '.png';
                            $imageFullPath1 = $folderPath1.$imageName1;
                            file_put_contents($imageFullPath1, $image_base641);                
            // ===========  working ans stora at storage path   =========== 
                }
                if($this->getBottomBanner2 ){
                    // ===========  working ans stora at storage path   =========== 
                                    // $folderPath = public_path('upload/');
                                    $folderPath2 = Storage::path('public/services-banner/');
                                    // dd($folderPath);
                                    $image_parts2 = explode(";base64,", $this->getBottomBanner2);
                                    $image_type_aux2 = explode("image/", $image_parts2[0]);
                                    $image_type2 = $image_type_aux2[1];
                                    $image_base642 = base64_decode($image_parts2[1]);
                                    $imageName2 = time().'_tab' . '.png';
                                    $imageFullPath2 = $folderPath2.$imageName2;
                                    file_put_contents($imageFullPath2, $image_base642);                
                    // ===========  working ans stora at storage path   =========== 
                        }
                if($this->getBottomBanner3 ){
                    // ===========  working ans stora at storage path   =========== 
                                    // $folderPath = public_path('upload/');
                                    $folderPath3 = Storage::path('public/services-banner/');
                                    // dd($folderPath);
                                    $image_parts3 = explode(";base64,", $this->getBottomBanner3);
                                    $image_type_aux3 = explode("image/", $image_parts3[0]);
                                    $image_type3 = $image_type_aux3[1];
                                    $image_base643 = base64_decode($image_parts3[1]);
                                    $imageName3 = time().'_mob' . '.png';
                                    $imageFullPath3 = $folderPath3.$imageName3;
                                    file_put_contents($imageFullPath3, $image_base643);                
                    // ===========  working ans stora at storage path   =========== 
                        }
                ServicesPageBanner::create([
                    'page_cat_id' =>    $this->pageCatId,
                    'heading' =>    $this->heading,
                    'banner' =>    $imageName1  ?? Null,
                    'tablet_banner' =>    $imageName2  ?? Null,
                    'mobile_banner' =>    $imageName3  ?? Null,

                ]);
                $notification = array(
                    'message' => 'Service Banner Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_services_banner')->with($notification);
        }
        public function updatingSearch()
            {
                $this->resetPage();
            }
        public function render()
        {
            $this->getPCategory =  PageCategory::get();
            $this->trashdata = ServicesPageBanner::onlyTrashed()->get();
            $this->allBanners =   ServicesPageBanner::join('page_categories' , 'services_page_banners.page_cat_id' ,'page_categories.id')
            ->select('services_page_banners.*','page_categories.page_cat_name')
            ->orderBy('created_at')    
            ->where('heading', 'like', '%'.trim($this->search).'%')
            ->orWhere('page_cat_name', 'like', '%'.trim($this->search).'%')
             ->paginate(5);
            return view('livewire.backend.pages.services.banner.view-banners',['allBanners' => $this->allBanners,])->layout('layouts.backend');
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


    // ================================= fullly del ======================
    public function restore($id){
        ServicesPageBanner::withTrashed()->find($id)->restore();
        $notification = array(
        'message' => 'Section  Restored',
        'alert-type' => 'Success'
    );
    return   redirect(request()->header('Referer'))->with($notification);
    }


public function fulleDelete($id){
        $getimg  = ServicesPageBanner::onlyTrashed()->find($id);
        $imagePath = Storage::path('public/services-banner/'. $getimg->banner);
        $imagePath2 = Storage::path('public/services-banner/'. $getimg->tablet_banner);
        $imagePath3 = Storage::path('public/services-banner/'. $getimg->mobile_banner);

    
        if(File::exists($imagePath) && isset($getimg->banner)){
            unlink($imagePath);
        }
        if(File::exists($imagePath2) && isset( $getimg->tablet_banner)){
            unlink($imagePath2);
        }
        if(File::exists($imagePath3) && isset($getimg->mobile_banner) ){
            unlink($imagePath3);
        }
        ServicesPageBanner::onlyTrashed()->find($id)->forceDelete();
                $notification = array(
                'message' => 'Section Deleted',
                'alert-type' => 'error'
            );
return   redirect(request()->header('Referer'))->with($notification);
}
}
