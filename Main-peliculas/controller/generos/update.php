<?php
    if(isset($_GET['gen_id'])){

    include '../../model/conectar.php';

    $id = $_GET['gen_id'];
    $sql = "SELECT gen_id, gen_nombre FROM generos 
            WHERE gen_id =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
    

    if(isset($_POST['gen_id'])){
        include '../../model/conectar.php';
        $id = $_POST['gen_id'];
        $gen_nombre = $_POST['gen_nombre'];
        $sql = "UPDATE generos set gen_nombre ='".$gen_nombre."' WHERE gen_id =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/generos/index.php');

    }
    

?>