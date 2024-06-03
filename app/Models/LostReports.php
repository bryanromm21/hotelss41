<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostReports extends Model
{
    use HasFactory;
    protected $fillable = ['departaments_id', 'descripcion', 'date of foud','photo', 'personals_id', 'rooms_id','specials_areas_id' ];

    public function personals(){
        return $this->belongsTo(Personal :: class, 'personals_id' );
    }
    public function rooms(){
        return $this->belongsTo(room:: class, 'rooms_id');
    }
    public function departaments(){
        return $this->belongsTo(departaments::class, 'departaments_id');
    }

    public function activityreports(){
        return $this->hasMany(activityreports::class, 'id');
    }
    public function specials_areas(){
        return $this->belongsTo(specials_areas::class, 'specials_areas_id');
    }
}
