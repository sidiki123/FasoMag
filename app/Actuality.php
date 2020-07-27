<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actuality extends Model
{
    protected $table = 'actualities';
    protected $primaryKey = 'idActualities';
    public $timestamps = true;
    protected $fillable = [
        'titre', 'description','image','publication','idcategorie'
    ];

    public function actuality_cat()
    {
        return $this->belongsTo(Categorie::class, 'idcategorie', 'idActualities');
    }
}
