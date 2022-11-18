<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesPageSection extends Model
{
    use SoftDeletes;

    protected $guarded =[];



    public function pageCatName(){
        return $this->belongsTo(PageCategory::class,'page_cat_id' ,'id');
      }


}
