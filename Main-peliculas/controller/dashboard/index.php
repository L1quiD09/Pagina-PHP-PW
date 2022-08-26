<?php
    include '../../model/conectar.php';
    //numerico de Peliculas
    $sql = "SELECT count(pel_id) as total_pel FROM peliculas ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_pel = $row['total_pel'];
    include '../../model/desconectar.php';
    //Nnumerico de socios
    include '../../model/conectar.php';
    $sql = "SELECT count(soc_id) as total_soc FROM socios ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_soc = $row['total_soc'];
    include '../../model/desconectar.php';
    //Numerico de alquileres
    include '../../model/conectar.php';
    $sql = "SELECT count(alq_id) as total_alq FROM alquileres ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_alq = $row['total_alq'];
    include '../../model/desconectar.php';
    //Meses de alquileres
    include '../../model/conectar.php';
    $sql = "SET lc_time_names = 'es_ES'; ";
    $sql_mes = "SELECT DISTINCT MONTHNAME(alq_fecha_desde) AS mes FROM alquileres ORDER BY MONTH(alq_fecha_desde) ;";
    $result = $conn->query($sql);
    $result_mes = $conn->query($sql_mes);
    $i = 0; 
    $total_mes=array();
    if ($result_mes->num_rows > 0) {          
        while($row = $result_mes->fetch_assoc()) {
            $total_mes[$i]=("'".$row['mes']."'");
            $i++;
        }
    }
    $meses = "['',".implode(",",$total_mes)."]";
    //Suma de alquileres por mes
    $sql_alq_mes = "SELECT SUM(alq_valor) as suma FROM alquileres GROUP BY MONTH(alq_fecha_desde) ORDER BY MONTH(alq_fecha_desde) ;";
    $result = $conn->query($sql);
    $result_alq_mes = $conn->query($sql_alq_mes);
    $i = 0; 
    $total_alq_mes=array();
    if ($result_alq_mes->num_rows > 0) {          
        while($row = $result_alq_mes->fetch_assoc()) {
            $total_alq_mes[$i]=("'".$row['suma']."'");
            $i++;
        }
    }
    $alq_meses = "['0',".implode(",",$total_alq_mes)."]";
    //Suma de alquileres
    $sql_alq = "SELECT SUM(alq_valor) as suma FROM alquileres;";
    $result_alq = $conn->query($sql_alq);
    $row = $result_alq->fetch_assoc();
    $total_alquileres = $row['suma'];
    include '../../model/desconectar.php';
?>