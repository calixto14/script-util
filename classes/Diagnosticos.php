<?php
namespace Classes;

require_once "../vendor/autoload.php";

use Illuminate\Database\Eloquent\Model as Eloquent;

class Diagnosticos extends Eloquent {

    public $timestamps = false;

    protected $table = 'diagnosticos';

    protected $fillable = ['id_paciente', 'id_doenca', 'data_diagnostico'];
}