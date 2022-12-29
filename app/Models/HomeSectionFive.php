<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSectionFive extends Model
{
    use SoftDeletes;

    protected $guarded =[];
    public function routeName(){
        return  $this->belongsTo(RouteNameList::class , 'button_link' ,'id');
     }
}
