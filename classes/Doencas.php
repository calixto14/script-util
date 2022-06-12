<?php

namespace Classes;


require_once "../vendor/autoload.php";

use Illuminate\Database\Eloquent\Model as Eloquent;

class Doencas extends Eloquent{

    public $timestamps = false;

    protected $table = 'doencas';

    protected $fillable = ['nome'];
}