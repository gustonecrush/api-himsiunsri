<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $guarded = [ "id" ];
    
    public function dinas()
    {
        return $this->belongsTo(Dinas::class);
    }

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }

}
