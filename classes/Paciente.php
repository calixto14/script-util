<?php
namespace Classes;

require_once "../vendor/autoload.php";

use Illuminate\Database\Eloquent\Model as Eloquent;


class Paciente extends Eloquent
{

    public $timestamps = false;

    protected $table = "pacientes";
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
       'nome', 'idade', 'id_estado','id_classe_social'
   ];  
  
 }