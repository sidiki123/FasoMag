<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail;

class Abonne extends Model
{

    protected $table = 'abonnes';
    protected $primaryKey = 'idabonne';
    public $timestamps = true;
    protected $fillable = [
        'nom', 'prenom', 'categorie','email'
    ];

    public function abonne_act()
    {
        return $this->hasMany(Actuality::class, 'idabonne', 'idActualities');
    }

    public function abonne_cat()
    {
        return $this->hasMany(Categorie::class, 'idcategorie', 'idabonne');
    }

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($abonne) {
            if ($abonne->status == 1) {
                Mail::send(
                    'email',
                    array(
                        'nom' => $abonne->nom,
                        'email' => $abonne->email,
                        'Nouveau Journal disponible' => $abonne->message
                    ),
                    function ($message) use ($abonne) {
                        $message->from($abonne->email);
                        $message->to('sidikiouedraogo2000@gmail.com', 'nom')->subject('Nouveau Journal disponible');
                    }
                );
            }
        });
    }
}
