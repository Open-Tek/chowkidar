<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    protected $fillable = ["name", "society_id"];
    use SoftDeletes;

    public function building(){
        return $this->hasMany("App\Flats");
    }
}
