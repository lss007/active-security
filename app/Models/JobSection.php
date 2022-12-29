<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobSection extends Model
{
    use SoftDeletes;
    protected $guarded =[];
    public function routeName(){
        return  $this->belongsTo(RouteNameList::class , 'link' ,'id');
     }

     
}
