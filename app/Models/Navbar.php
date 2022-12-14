<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Navbar extends Model
{
    use SoftDeletes;
    protected $guarded =[];
    // protected $fillable = ['route_name' , 'route_link'  ];
    public function routeName()
{
    return $this->belongsTo(RouteNameList::class, 'route_link', 'id');
}
}
