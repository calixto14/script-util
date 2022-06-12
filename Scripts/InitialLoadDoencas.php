<?php
namespace Scripts;

require_once "../vendor/autoload.php";

require "../Eloquent/bootstrap.php";

use Classes\Doencas;

class InitialLoadDoencas{

    function getInitialArray(){
        return array('Diabetes','Hipertensão','Alzheimer','Depressão','AVC','Dislipidemia','Câncer','Asma','Mal de Parkinson','Pneumonia','Câncer de pulmão',
        'Miocardiopatias','Câncer de mama','Câncer de próstata','Aids',' Insuficiência renal','Câncer de cólon','Filariose','Esquistossomose','Leptospirose','Hantavirose','Febre Maculosa',
        'Leishmaniose tegumentar','Geo-helmintíases','Influenza Pandêmica A(H1N1)','Ascaridíase','Botulismo','Cancro Mole','Coccidioidomicose','Cólera','Coqueluche','Dengue','Enterobíase','Donovanose',
        'Escabiose','Estrongiloidíase','Febre Amarela','Giardíase','Gonorreia','Hanseníase','Hepatite A','Herpes Simples','Histoplasmose','Malária','Meningites Virais','Oncocercose','Peste','Poliomielite');
    }

    function LoadDoencas(){
        $arrayDoencas = $this->getInitialArray();

        foreach($arrayDoencas as $doenca){

            $doencaToSave = new Doencas();

            $doencaToSave->nome = utf8_decode($doenca);

            $doencaToSave->save();

        }
    }

}

(new InitialLoadDoencas())->LoadDoencas();