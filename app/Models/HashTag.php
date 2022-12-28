<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HashTag extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function navname()
{
    return $this->belongsTo(Navbar::class, 'page_id', 'id');
}
}
