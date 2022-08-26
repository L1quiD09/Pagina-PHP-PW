<?php
    include '../../model/conectar.php';
    $sql = "SELECT ap.apl_id, a.act_nombre, p.pel_nombre, ap.apl_papel FROM actor_peliculas ap, actores a, peliculas p
            WHERE ap.pel_id= p.pel_id
            AND ap.act_id = a.act_id";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
?>