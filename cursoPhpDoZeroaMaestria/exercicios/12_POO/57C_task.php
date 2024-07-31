<?php
// Crie uma classe chamada Task que represente uma tarefa.
// A classe Task deve ter os seguintes atributos:
//     title: título da tarefa.
//     description: descrição da tarefa.
//     completed: indica se a tarefa está concluída ou não.
// A classe Task deve ter os seguintes métodos:
//     markAsCompleted(): marca a tarefa como concluída.
//     markAsIncomplete(): marca a tarefa como não concluída.
//     getTitle(): retorna o título da tarefa.
//     getDescription(): retorna a descrição da tarefa.
//     isCompleted(): retorna um booleano indicando se a tarefa está concluída ou não.

class Task {
    private $title;
    private $description;
    private $completed = false;

    public function __construct($t, $d) {
        $this->title = $t;
        $this->description = $d;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function isCompleted() {
        if ($this->completed) {
            return "Concluída.";
        } else {
            return "Não concluída.";
        }
    }

    public function markAsCompleted() {
        $this->completed = true;
    }

    public function markAsIncomplete() {
        $this->completed = false;
    }
}

$tarefa = new Task("PHP", "Estudar PHP das 19h às 22h");
echo $tarefa->getTitle();
echo "<br>";
echo $tarefa->getDescription();
echo "<br>";
echo $tarefa->isCompleted();
echo "<br>";

echo "<h3>Marcando como concluída</h3>";
$tarefa->markAsCompleted();
echo $tarefa->isCompleted();
echo "<br>";

echo "<h3>Marcando como NÃO concluída</h3>";
$tarefa->markAsIncomplete();
echo $tarefa->isCompleted();
echo "<br>";