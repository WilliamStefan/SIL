<?php include '/../../controllers/dss.php';

$component_id = $_GET['cid'];
$year = date('Y');
$yearbefore = $year-1;
$jan2 = countSold($component_id, '01', $yearbefore);
$feb2 = countSold($component_id, '02', $yearbefore);
$mar2 = countSold($component_id, '03', $yearbefore);
$apr2 = countSold($component_id, '04', $yearbefore);
$mei2 = countSold($component_id, '05', $yearbefore);
$jun2 = countSold($component_id, '06', $yearbefore);
$jul2 = countSold($component_id, '07', $yearbefore);
$ags2 = countSold($component_id, '08', $yearbefore);
$sep2 = countSold($component_id, '09', $yearbefore);
$okt2 = countSold($component_id, '10', $yearbefore);
$nov2 = countSold($component_id, '11', $yearbefore);
$des2 = countSold($component_id, '12', $yearbefore);


$jan1 = countSold($component_id, '01', $year);
$feb1 = countSold($component_id, '02', $year);
$mar1 = countSold($component_id, '03', $year);
$apr1 = countSold($component_id, '04', $year);
$mei1 = countSold($component_id, '05', $year);
$jun1 = countSold($component_id, '06', $year);
$jul1 = countSold($component_id, '07', $year);
$ags1 = countSold($component_id, '08', $year);
$sep1 = countSold($component_id, '09', $year);
$okt1 = countSold($component_id, '10', $year);
$nov1 = countSold($component_id, '11', $year);
$des1 = countSold($component_id, '12', $year);
?>

<div class="container">
	<h2>Statistik penjualan barang <?php echo $component_id?></h2>
	<div class="row">
		<div class="col-md-6">
			<canvas id="myChart" width="400" height="400"></canvas>
		</div>
		<div class="col-md-6">
			<div class="circle yearnow"></div>
			<div class="inline">
				<?php echo date('Y')?>
			</div>
<br><br>
			<div class="circle yearbefore"></div>
			<div class="inline">
				<?php echo date('Y')-1?>
			</div>
		</div>
	</div>

</div>




<script type="text/javascript">

var data = {
  labels: ["January", "February", "March", "April", "May", "June", "July","August", "September",  " October", "November", "December"],
  datasets: [
      {
      	// last year
          label: "Sodium intake",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [<?php echo $jan2 ?>, 
          		<?php echo $feb2 ?>,
          		<?php echo $mar2 ?>,
          		<?php echo $apr2 ?>,
          		<?php echo $mei2 ?>,
          		<?php echo $jun2 ?>,
          		<?php echo $jul2 ?>,
          		<?php echo $ags2 ?>,
          		<?php echo $sep2 ?>,
          		<?php echo $okt2 ?>,
          		<?php echo $nov2 ?>,
          		<?php echo $des2 ?>
          		]
      },
      {
          label: "Sugar intake",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [<?php echo $jan1 ?>, 
          		<?php echo $feb1 ?>,
          		<?php echo $mar1 ?>,
          		<?php echo $apr1 ?>,
          		<?php echo $mei1 ?>,
          		<?php echo $jun1 ?>,
          		<?php echo $jul1 ?>,
          		<?php echo $ags1 ?>,
          		<?php echo $sep1 ?>,
          		<?php echo $okt1 ?>,
          		<?php echo $nov1 ?>,
          		<?php echo $des1 ?>]
      }
  ]
}

var ctx = new Chart(document.getElementById("myChart").getContext("2d")).Line(data);


</script>