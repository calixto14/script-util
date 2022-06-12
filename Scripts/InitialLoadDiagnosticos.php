<?php

require_once "../vendor/autoload.php";

require "../Eloquent/bootstrap.php";

use Classes as Classes;

class InitialLoadDiagnosticos{   

    function generateInitialLoad(){        

        for($insert = 0; $insert<10000; $insert++){

            $pacienteAleatorio = random_int(0,499);

            $doencaAleatoria = random_int(0,47);

            $diaAleatorio = random_int(1,29);

            $mesAleatorio = random_int(1,12);

            $diagnostico = new Classes\Diagnosticos();

            $diagnostico->id_paciente = $pacienteAleatorio;

            $diagnostico->id_doenca =  $doencaAleatoria;

            $diagnostico->data_diagnostico = date('Y-m-d', strtotime($diaAleatorio."-".$mesAleatorio."-2021"));

            $diagnostico->save();

        }

    }
}

(new InitialLoadDiagnosticos())->generateInitialLoad();