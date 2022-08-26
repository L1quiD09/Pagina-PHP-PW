<?php include '../template/header.php' ?>
<?php include '../../controller/dashboard/index.php' ?>
<section class="content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-film"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Películas</span>
                    <span class="info-box-number">
                        <?php echo $total_pel?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Alquileres</span>
                    <span class="info-box-number">
                        <?php echo $total_alq ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total socios</span>
                    <span class="info-box-number"><?php echo $total_soc ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 ">
            <div class="card ">
                <div class="card-header border-0 ">
                    <div class="d-flex justify-content-center">
                        <H3 class="card-title text-bold text-lg">ALQUILERES</H3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex ">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg ">Total: $<?php echo $total_alquileres?></span>
                        </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                        <canvas id="sales-chart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
  const labels = <?php echo $meses ?>

  const data = {
    labels: labels,
    datasets: [{
      label: 'Alquileres',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: <?php echo $alq_meses ?>,
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>
<script>
  const myChart = new Chart(
    document.getElementById('sales-chart'),
    config
  );
</script>
<?php include '../template/footer.php' ?>