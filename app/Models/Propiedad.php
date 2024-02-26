<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedades'; //propiedads
    protected $primaryKey = 'codigoPropiedad';
    public $timestamps = false;

}
//Asumira que la tabla a mapear sea el singular de
// "Propiedad" -> 'Propiedads'
//En este caso es muy ambigua, por lo tanto
//hay que especificarselo de forma explicita (linea 12)

//CRUD
//Create 
//Read
//Update
//Delete
