<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Layanan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'layanans';
    protected $guarded = [ "id" ];
    protected $hidden;
    protected $softDelete = true;

}
