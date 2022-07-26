<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    //la tabla con la cual el modelo se relaciona
    protected $table = "countries";
    //la clave primaria de dicha tabla
    protected $primaryKey="country_id";
    //anular campos de auditoria
    public $timestamps =false;
    use HasFactory;
}
