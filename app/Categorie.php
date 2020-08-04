<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';
    protected $primaryKey = 'idcategorie';
    public $timestamps = true;
    protected $fillable = [
        'idcategorie', 'categorie', 'idActualities'
    ];

    public function categ()
    {
        return $this->hasMany(Actuality::class, 'idcategorie', 'idActualities');
    }

    public function categ_abonne()
    {
        return $this->belongsTo(Abonne::class, 'idcategorie', 'idabonne');
    }
}
