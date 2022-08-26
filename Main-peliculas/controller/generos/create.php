<?php
    if(isset($_POST['gen_nombre'])){
        include '../../model/conectar.php';
        $gen_id = 0;
        $gen_nombre = $_POST['gen_nombre'];
        $sql = "INSERT INTO generos(gen_id,gen_nombre) 
        VALUES (0,'".$gen_nombre."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/generos/index.php');
    }
    
?>