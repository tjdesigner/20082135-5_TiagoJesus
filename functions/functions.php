<?php
    include('dados/dados.php');

    function getTituloPage($array, $value) {
        $paginas = array();
        foreach ($array as $i => $el) {
            echo ' '.$el[$value];
        }
    }
?>