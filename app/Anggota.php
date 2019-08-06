<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hobi;

class Anggota extends Model
{
    protected $table='anggota';
    protected $fillable=['nama','alamat'];

    public function hobi(){
    	return $this->hasMany('App\Hobi');
    }

}
