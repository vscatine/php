<?php
    if (12 < 5 || "João" === "João") {
        echo "Passou no primeiro. <br>";
    } else {
        echo "Não passou no primeiro. <br>";
    }

    if (1 > 5 || 1) {
        echo "Passou no segundo. <br>";
    } else {
        echo "Não passou no segundo. <br>";
    }

    if (20 === "20" && 51 >= 31) {
        echo "Passou no terceiro. <br>";
    } else {
        echo "Não passou no terceiro. <br>";
    }