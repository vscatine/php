<?php
class Humano {
    protected $nome;
    protected $idade;

    public function setNome($n) {
        $this->nome = $n;
    }

    public function setIdade($i) {
        $this->idade = $i;
    }

    public function falarIdade() {
        echo "Olá, meu nome é $this->nome e tenho $this->idade anos.";
    }
}

class Professor extends Humano {
    private $materia;
    private $turno;

    public function setMateria($m) {
        $this->materia = $m;
    }

    public function setTurno($t) {
        $this->turno = $t;
    }

    public function falarDadosProfessor() {
        echo "Leciono $this->materia no turno da $this->turno.";
    }
}

$jorge = new Professor;
$jorge->setNome("Jorjão");
$jorge->setIdade(54);
$jorge->setMateria("filosofia");
$jorge->setTurno("manhã");

$jorge->falarIdade();
echo "<br>";
$jorge->falarDadosProfessor();
echo "<br>";

$maragareth = new Professor;
$maragareth->setNome("Margareth");
$maragareth->setIdade(63);
$maragareth->setMateria("português");
$maragareth->setTurno("tarde");

$maragareth->falarIdade();
echo "<br>";
$maragareth->falarDadosProfessor();