<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dinas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'dinas';
    protected $guarded = [ 'id' ];
    protected $hidden;
    protected $softDelete = true;

    public function prokerDinas()
    {
        return $this->hasMany(ProkerDinas::class, 'dinas_id');
    }

    public function divisi() 
    {
        return $this->hasMany(Divisi::class, 'dinas_id');
    }
}
