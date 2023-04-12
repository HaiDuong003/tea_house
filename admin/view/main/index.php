<?php
require '../view/main/header.php';

?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Số lượng sản phẩm <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?php echo $countProduct['COUNT(*)'] ?></h2>
            <!-- <h6 class="card-text">Increased by 60%</h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Số lượng thành viên <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?php echo $countUser['COUNT(*)'] ?></h2>
            <!-- <h6 class="card-text">Decreased by 10%</h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Số lượng bình luận <i class="mdi mdi-diamond mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?php echo $countCmt['COUNT(*)'] ?></h2>
            <!-- <h6 class="card-text">Increased by 5%</h6> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Visit And Sales Statistics</h4>
              <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
            </div>
            <canvas id="visit-sale-chart" class="mt-4"></canvas>
          </div>
        </div>
      </div> -->
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Traffic Sources</h4>
            <canvas id="traffic-chart"></canvas>
            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.php -->
  <footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Dương | Dự án</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas> -->
<script type="text/javascript">
  let xValue = [<?php foreach ($customer as $key => $data) {
                  echo "'" . $data['category_name'] . " ', ";
                } ?>];
  let yValue = [<?php foreach ($customer as $key => $data) {
                  echo "'" . $data['percent'] . " ', ";
                } ?>];
  let colorList = ["rgb(71, 45, 48)", "rgb(255, 64, 105)", "rgb(5, 155, 255)", "rgb(255, 194, 52)"];

  new Chart("traffic-chart", {
    type: "doughnut",
    data: {
      labels: xValue,
      datasets: [{
        backgroundColor: colorList,
        data: yValue
      }]
    },
    options: {
      title: {
        display: true,
        text: "Tỉ lệ sản phẩm(%)"
      }
    }
  });
</script>
<?php
require '../view/main/footer.php';
?>