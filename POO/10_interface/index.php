<?php
/* Interface funciona como um "contrato" a ser seguido por outras classes que irão implementa-la, então, todo método
declado na interface, deve obrigatoriamente ser implementado na classe que a está utilizando a interface.

A interface apenas define os métodos, mas não aplica nenhuma lógica, isso fica por parte da classe que implementará a inteface*/
 interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
 }

 class BlogPost implements Crud {
    public function create()
    {
        //Lógica para criação de um post.
    }

    public function read()
    {
        //Lógica para ler/mostrar dados de um post.
    }

    public function update()
    {
        //Lógica para alterar dados de um post.
    }

    public function delete()
    {
        //Lógica para deletar um post.
    }
 }