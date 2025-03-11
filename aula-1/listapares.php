<?php
function listarPares() {
    for ($i = 1; $i <= 20; $i++) { 
        if ($i % 2 == 0) { 
            echo $i . "<br>"; 
        }
    }
}

listarPares();
?>