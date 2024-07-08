<?php
    function defineCorCarro($cor = "vermelha") {
        return "A cor do carro é $cor. <br>";
    }

    echo defineCorCarro();
    echo defineCorCarro("azul");