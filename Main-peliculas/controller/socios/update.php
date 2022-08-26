<?php
    if(isset($_GET['soc_id'])){

        include '../../model/conectar.php';
    
        $id = $_GET['soc_id'];
        $sql = "SELECT * FROM socios 
                WHERE soc_id =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    
        }
        
    
        if(isset($_POST['soc_id'])){
            include '../../model/conectar.php';
            $soc_id = $_POST['soc_id'];
            $soc_cedula = $_POST['soc_cedula'];
            $soc_nombre = $_POST['soc_nombre'];
            $soc_direccion = $_POST['soc_direccion'];
            $soc_telefono = $_POST['soc_telefono'];
            $soc_correo = $_POST['soc_correo'];

            $sql = "UPDATE socios 
            set soc_cedula = '".$soc_cedula."', soc_nombre ='".$soc_nombre."', soc_direccion = '".$soc_direccion."', soc_telefono = '".$soc_telefono."', soc_correo = '".$soc_correo."'
                WHERE soc_id =".$soc_id;
            $result = $conn->query($sql);
            include '../../model/desconectar.php';
            header('Location: ../../view/socios/index.php');
    
        }
?>