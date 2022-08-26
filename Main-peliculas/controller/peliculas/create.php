<?php

    include '../../model/conectar.php';
    $sql = "SELECT * FROM generos ORDER BY gen_nombre;";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    if(isset($_POST['pel_nombre']) && isset($_POST['gen_id'])&& isset($_POST['pel_costo'])&& isset($_POST['pel_fecha_estreno'])){
        include '../../model/conectar.php';
        $pel_id = 0;
        $pel_nombre = $_POST['pel_nombre'];
        $gen_id = $_POST['gen_id'];
        $pel_costo = $_POST['pel_costo'];
        $pel_fecha_estreno = $_POST['pel_fecha_estreno'];
        
        $sql = "INSERT INTO peliculas(pel_id,gen_id, pel_nombre, pel_costo, pel_fecha_estreno) 
        VALUES (0,'".$gen_id."','".$pel_nombre."',".$pel_costo.",'".$pel_fecha_estreno."') ";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/peliculas/index.php');
    }
    
?>