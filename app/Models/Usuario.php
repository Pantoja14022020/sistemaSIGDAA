<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

/*"tipo_usuario":"Responsable de Archivo"
"nombre":"Daniel"
"apellido_paterno":"Tlanepantla"
"apellido_materno":"Pantoja"
"numero_empleado":"419411"
"dep_o_unid":"unidad"
"cat_dep_o_unid":"Escuelas Superiores"
"subcat_dep_o_unid":"Escuela Superior de Tlahuelilpan"
"cargo_o_funcion":"Estudiante"
"ext_telefonica":"567"
"correo":"tl419411@uaeh.edu.mx"
"contraseña":"1234567890"*/


class Usuario extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'usuario';
}
