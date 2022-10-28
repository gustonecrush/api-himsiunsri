<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [ "id" ];

    public function dinas()
    {
        return $this->belongsTo(Dinas::class);
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

}
