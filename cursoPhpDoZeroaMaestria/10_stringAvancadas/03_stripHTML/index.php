<?php
    $txtHTML = "<h3>Titulo em HTML</h3><p>Texto dentro de um parágrafo</p><div>Agora estou dento de uma div</div><br>";
    echo $txtHTML;

    $txtPlain = strip_tags($txtHTML);
    echo $txtPlain;