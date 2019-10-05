<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Society extends Model
{
    protected $table = "societies";
    protected $fillable = ["name"];
    use SoftDeletes;

    public function building()
    {
        return $this->hasMany("App\Building");
    }
}
