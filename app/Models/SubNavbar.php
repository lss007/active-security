<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubNavbar extends Model
{

    use SoftDeletes;
    protected $guarded =[];
    public function getNavName()
    {
        return $this->belongsTo(Navbar::class, 'navbar_id', 'id');
    }
    public function routeName()
    {
        return $this->belongsTo(RouteNameList::class, 'route_link', 'id');
    }
}
