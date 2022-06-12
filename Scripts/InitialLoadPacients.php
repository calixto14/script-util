<?php
namespace Scripts;

require_once "../vendor/autoload.php";

require "../Eloquent/bootstrap.php";

use Classes\Paciente;
use Connections\MSSql;

class InitialLoadPacients {

    function __construct(){
        $this->LoadPacients();

    }

    function getInitialArray(){

        return array( 'Enzo Porto', 'João Miguel Barbosa', 'Leandro Melo', 'Luiz Fernando da Cruz', 'Maria Julia Rocha', 'Dra. Fernanda Teixeira', 'Stephany Sales',
        'Enzo Gabriel Rocha', 'Anthony Correia', 'Clarice Ramos', 'Renan Almeida', 'Davi Luiz Martins', 'Sarah Peixoto', 'Srta. Isabel Fogaça',
        'Amanda Teixeira', 'Helena Fernandes', 'Nathan da Cunha', 'Francisco Aragão', 'Stephany Moura', 'Dra. Bruna da Conceição', 'João Miguel Pires',
        'Maitê Vieira', 'Clara Cunha', 'Davi Lucas Cavalcanti', 'Dr. Henrique Gonçalves', 'Enzo Cardoso', 'Alexia Gonçalves', 'Lívia Costela',
        'Camila Ribeiro', 'Sr. Lorenzo Lima', 'Kevin Silva', 'Lorenzo Nunes', 'André Azevedo', 'João Vitor Pinto', 'Erick Carvalho', 'Bruna Silva', 'Caroline Barbosa', 'João Lucas Nogueira', 'Daniel da Rosa', 'Dr. Gustavo Moura', 'Kevin Santos', 'Caio Araújo',
        'Isadora Costa', 'Nathan Fogaça', 'Ana Clara Cardoso', 'Bárbara Moraes', 'Marina Rezende', 'Leandro Melo', 'Davi Oliveira',
        'Davi Lucas Pires', 'Maysa Sales', 'Eduardo Campos', 'Rebeca Silveira', 'Bianca Rocha', 'Thomas Porto', 'Davi Lucas Alves',
        'Mirella Silva', 'Anthony Nogueira', 'Dr. Vicente Lopes', 'Murilo Martins', 'Pietra Viana', 'Clarice da Cunha', 'Leonardo da Conceição',
        'Dr. Levi Viana', 'Sr. Felipe Oliveira', 'Sr. Yago Alves', 'Mariana das Neves', 'Ana Clara Nogueira', 'Dra. Isadora da Luz', 'Ana Júlia Barros',
        'Heloísa Sales', 'Enrico Farias', 'Maria Eduarda da Cruz', 'Erick Barros', 'Arthur das Neves', 'João Vitor Aragão',
        'João Campos', 'Davi Lucas Moura', 'Bárbara Freitas', 'Olivia Cardoso', 'Danilo Costa', 'Alexandre Teixeira', 'Sra. Ana Carolina da Rosa',
        'Sr. Caio da Conceição', 'Alana Cardoso', 'Lara Teixeira', 'Pedro Henrique Carvalho', 'Luigi Ferreira', 'Pietra Araújo',
        'Sr. Calebe Pereira', 'Laís da Paz', 'Ana Laura da Cruz', 'Sra. Emilly Lima', 'Caio Oliveira', 'Luiz Henrique Barbosa', 'Fernanda Moraes',
        'Erick Almeida', 'Laís Freitas', 'Noah Souza', 'Dr. Lorenzo Moura', 'Felipe da Paz', 'Ana Clara Jesus', 'Dr. Henrique Campos',
        'Sr. Miguel Almeida', 'Lívia da Mota', 'Marcela Melo', 'Emanuel Costela', 'Sarah Silveira', 'Vicente Caldeira', 'Ana Vitória Dias',
        'Felipe da Luz', 'Maria Cecília Rezende', 'Rodrigo Monteiro', 'Sr. Carlos Eduardo Nascimento', 'Cauã Pires', 'Gustavo da Conceição',
        'Rafael da Mata', 'Júlia Oliveira', 'Luiz Gustavo Ramos', 'Laís Teixeira', 'Camila Azevedo', 'Vinicius Costela', 'Samuel Alves',
        'Daniela Cunha', 'Leandro da Cunha', 'Vitória Campos', 'Henrique Aragão', 'João Miguel Barbosa', 'João Guilherme Almeida',
        'Isadora Cardoso', 'Daniel Dias', 'Dr. Thiago Castro', 'Thomas Ramos', 'Ana Carolina Moura', 'Nina da Mata', 'Srta. Carolina Lopes',
        'Giovanna Porto', 'Maria Cecília Dias', 'Dr. Eduardo da Cruz', 'João Lucas Dias', 'Ana Clara Pinto', 'Igor Duarte', 'Kamilly Moura',
        'Calebe Pereira', 'Eduarda Freitas', 'Mariane Porto', 'Eloah Caldeira', 'Vitor Hugo Moraes', 'Rafael Costa', 'Leandro Ferreira',
        'Vinicius da Mota', 'Sr. Caio Fernandes', 'Dr. Ian da Rosa', 'Daniela Melo', 'Lorenzo Farias', 'Davi Novaes', 'Lara Rocha',
        'Isabel Lopes', 'Dra. Amanda Cardoso', 'Natália Moura', 'Ana Beatriz Lopes', 'Dr. Enrico Campos', 'Diego Rezende',
        'Augusto da Mata', 'Elisa Azevedo', 'Igor Barbosa', 'Olivia Costela', 'Mariana Ramos', 'Stephany Rocha',
        'Srta. Maria Clara da Mota', 'Pedro Miguel Rocha', 'Rafael Farias', 'Clara Cunha', 'Raquel Porto', 'João Lucas Fogaça',
        'Benjamin das Neves', 'Vitor Gabriel Freitas', 'Fernanda Cardoso', 'Marcelo Dias', 'Stella Aragão', 'Ana Julia Silveira',
        'Stephany Mendes', 'Benjamin Freitas', 'Enrico Almeida', 'João Felipe Lima', 'Henrique Freitas', 'Luiz Fernando Cardoso',
        'Lavínia Alves', 'Olivia Silva', 'Dr. Gabriel Pinto', 'Vitória Barbosa', 'Sr. Francisco Barros', 'Gabriela Sales',
        'Vitor Hugo Ramos', 'Arthur da Cunha', 'Valentina Costa', 'Kaique Silveira', 'Thomas da Mota', 'Sr. Luigi Jesus',
        'Miguel Cunha', 'Evelyn Monteiro', 'Dra. Milena Freitas', 'Sofia Pereira', 'Benjamin da Costa', 'Fernando Oliveira',
        'Mariane Almeida', 'João Felipe Correia', 'Leandro Porto', 'Pedro Lucas Almeida', 'Davi Lucas da Rosa', 'Heitor Cunha',
        'Gustavo Barbosa', 'Clarice Viana', 'Sra. Maria Martins', 'Raul Nunes', 'Pedro Henrique Lima', 'Yago Castro',
        'João Felipe Rocha', 'Dra. Rafaela Moraes', 'Eduardo da Costa', 'Sr. Francisco Cardoso', 'Enzo Dias', 'Caroline Barbosa',
        'Nathan Barbosa', 'Gustavo Henrique Dias', 'Luiz Henrique Azevedo', 'Carolina Moraes', 'Maria Vitória Jesus', 'Kaique Freitas',
        'João Lucas Pinto', 'Dr. Cauê Ramos', 'Isabella Correia', 'Ana Dias', 'Olivia Moraes', 'Davi Lucas das Neves',
        'Laís Gonçalves', 'Nicolas da Luz', 'João Gabriel Pinto', 'Sr. Luiz Fernando Moreira', 'Thiago Araújo', 'Miguel Vieira',
        'João Felipe das Neves', 'Lívia Fogaça', 'Giovanna Costela', 'Brenda Costa', 'João Guilherme Fernandes', 'Fernanda Dias',
        'Ana Julia Barbosa', 'Joaquim Pinto', 'Dr. Ryan Dias', 'Mariana Araújo', 'Dr. Daniel Moraes', 'Heloísa Rodrigues',
        'Breno Sales', 'Davi Lucca da Mota', 'Srta. Maria Fernanda Costa', 'Giovanna Ramos', 'Breno Rocha', 'Augusto Silva', 'Sra. Maria Luiza Azevedo',
        'Alícia Moreira', 'Beatriz Almeida', 'Diogo da Cruz', 'Rodrigo Silva', 'Ana Julia da Cunha', 'Laís Nascimento', 'Laís Santos',
        'Valentina Ribeiro', 'Samuel Farias', 'Maria Julia Alves', 'Olivia Santos', 'Miguel Moraes', 'Breno Sales', 'Stephany Lima',
        'Alícia Rodrigues', 'Sra. Julia Peixoto', 'Ana Julia Fernandes', 'Srta. Fernanda Moura', 'Maria Cunha', 'Marcela Alves',
        'Raquel Azevedo', 'Cauã Azevedo', 'Dr. João Vitor Monteiro', 'Vicente Carvalho', 'Maria Alice Pinto', 'Erick Cardoso', 'Sophia Costela',
        'Nicole da Conceição', 'Lucca Fogaça', 'Beatriz da Conceição', 'Dra. Joana da Conceição', 'Gabrielly Dias', 'Thomas Cardoso', 'Rebeca Moreira',
        'Sophie Nogueira', 'Manuela Farias', 'Joana Sales', 'Srta. Yasmin Pereira', 'Raul Costela', 'Eduarda Nunes', 'Catarina Jesus',
        'Ana Júlia Novaes', 'Davi Luiz Viana', 'Luiz Otávio Araújo', 'Benjamin Silveira', 'Dr. Renan Sales', 'Cauê Nunes', 'Yasmin Pires',
        'Carolina Azevedo', 'Pedro Almeida', 'João Miguel da Mota', 'Alexandre Sales', 'Melissa Viana', 'Lorena Farias', 'Srta. Clara Oliveira',
        'Henrique Costela', 'Maysa Porto', 'Isaac Moura', 'Srta. Carolina Oliveira', 'Davi Lucas Sales', 'Bianca da Conceição', 'Dra. Ana Sophia da Cunha',
        'Sr. Enzo Gonçalves', 'Lucas Gabriel Silva', 'Bruna da Paz', 'Dr. Nicolas da Rosa', 'Leonardo Souza', 'Brenda Melo', 'João Campos',
        'Elisa da Rocha', 'Sophie Pereira', 'Maria Alice da Cunha', 'Sabrina Caldeira', 'Evelyn Teixeira', 'Eloah Barros', 'André Moura',
        'Srta. Beatriz Silva', 'Cauã Sales', 'Erick Costa', 'Diogo Porto', 'Dr. Danilo Cardoso', 'Juan Almeida', 'Vitor Novaes', 'Larissa Martins',
        'Vitória Carvalho', 'Caroline Silva', 'Anthony Lima', 'Sr. Isaac Rocha', 'Guilherme Moraes', 'Olivia da Mota', 'Leonardo Pinto',
        'Gustavo Henrique Viana', 'Yago Araújo', 'Miguel da Mata', 'Giovanna da Rocha', 'Pedro Henrique Porto', 'Eduarda Pereira', 'Laura Lopes',
        'Emanuelly Nascimento', 'Júlia Costa', 'Felipe Nogueira', 'Alana Nunes', 'Leonardo Santos', 'Maitê Silva', 'Miguel da Rocha',
        'Samuel Santos', 'Ana Beatriz Cardoso', 'Stephany Gonçalves', 'Esther Castro', 'Alexandre Farias', 'Ana Carolina Duarte', 'Renan Porto',
        'Mariana Nogueira', 'Caroline Cavalcanti', 'Renan Pires', 'Gustavo Gomes', 'Nicolas Freitas', 'João Gabriel Cavalcanti', 'Camila Rodrigues',
        'Sra. Maria Fernanda Cardoso', 'Rafaela da Costa', 'Augusto Moraes', 'Sofia da Cunha', 'Leandro Viana', 'Larissa Araújo', 'João Vitor Castro',
        'Sophie Sales', 'Eloah Mendes', 'Srta. Sofia Freitas', 'Natália Monteiro', 'Lavínia Silva', 'Ana Luiza Silva', 'Ana Laura Aragão',
        'Cecília Martins', 'Mariane Costela', 'Theo Porto', 'Stephany Pires', 'Dra. Giovanna Barros', 'Luigi Alves', 'Diego da Mota',
        'Pedro Miguel Teixeira', 'Sarah Duarte', 'Caroline Nogueira', 'Paulo Souza', 'Ian Lopes', 'Vitor Gabriel da Mata', 'Nicolas Pires',
        'Yuri Duarte', 'Amanda Oliveira', 'Ana Laura Santos', 'Sra. Helena Peixoto', 'Carlos Eduardo Nascimento', 'Sra. Sophia Pinto', 'Benício Duarte',
        'Bruna Fogaça', 'Arthur Nascimento', 'Alana Pinto', 'Esther da Luz', 'Dra. Mariana Moura', 'Ana Laura da Conceição', 'Felipe da Mata',
        'Ryan Ramos', 'Eduarda Barbosa', 'João Guilherme Alves', 'Fernanda Barros', 'Sra. Mariane da Conceição', 'Kevin Ferreira', 'Yuri Aragão',
        'Carlos Eduardo Farias', 'Sofia Silveira', 'João Miguel Cunha', 'Diogo Campos', 'Alice Fogaça', 'Luiz Fernando Porto', 'Dr. Vitor da Mata',
        'Bernardo Nogueira', 'Srta. Vitória Teixeira', 'Stephany Silveira', 'Srta. Beatriz Lima', 'Srta. Alana Monteiro', 'Carlos Eduardo Barros',
        'Calebe Moraes', 'Letícia Peixoto', 'Luiz Felipe Fernandes', 'Ana Júlia Caldeira', 'Daniel Silveira', 'Guilherme Pereira', 'Nicolas Moreira',
        'Benício Aragão', 'Sra. Maria Fernanda Aragão', 'Danilo da Rocha', 'Cauã Ferreira', 'Leonardo Dias', 'Augusto Nogueira', 'Melissa Pinto',
        'Bianca Silveira', 'Ana Sophia Farias', 'Juan Oliveira', 'Ana Vitória Cardoso', 'Ian Novaes', 'Otávio Teixeira', 'Sra. Clarice Pereira',
        'João Guilherme Cavalcanti', 'Ryan Oliveira', 'Srta. Maria Luiza Almeida', 'Lorena Jesus', 'Luiza da Costa', 'Erick Correia', 'Mariane Dias',
        'Pedro Henrique Rodrigues', 'Maria Fernanda Fernandes', 'Clara Porto', 'Camila Ferreira', 'Lucas Gabriel Novaes', 'Lavínia Porto',
        'Cauã Pereira', 'Alexandre Almeida', 'Maria Julia Nascimento', 'Ana Julia Farias', 'Eloah Lima', 'Marcelo da Costa', 'Carlos Eduardo Fogaça',
        'Gabriel Cardoso', 'Maria Vitória Mendes', 'Evelyn Pinto', 'Isabella Barbosa', 'Letícia Cardoso', 'Kamilly Aragão', 'Maria Eduarda Silva',
        'Dra. Bianca da Mota', 'Bárbara Pinto', 'Lucca Barros', 'Noah Farias', 'Raquel Fogaça', 'Júlia Gomes', 'Luiz Felipe Silveira',
        'Dr. Augusto da Mota', 'Caroline da Luz', 'Ana Julia Monteiro', 'Breno Costela');
    }

    function LoadPacients(){

        $pacientes = $this->getInitialArray();

       


        foreach($pacientes as $pac){

            $pacienteModel = new Paciente();

            $pacienteModel->nome = utf8_decode($pac);

            $pacienteModel->idade = random_int(10,70);

            $pacienteModel->id_estado = random_int(1,25);

            $pacienteModel->id_classe_social = random_int(1,4);

            $pacienteModel->save();

        }
    }
}

new InitialLoadPacients();