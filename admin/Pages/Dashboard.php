<?php
session_start();
if(!isset($_SESSION['UserId'])){
	echo '<script type="text/javascript"> window.location.href = "../Login.php" </script>';
}

?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Repa - Real Estate Professional Association of Pakistan - Dashboard</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-repa.ico">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Toastr style -->
	<link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

	<!-- Gritter -->
	<link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">


	<style>
	::-webkit-scrollbar {
		width: 12px; /* for vertical scrollbars */
		height: 12px; /* for horizontal scrollbars */
	}

	::-webkit-scrollbar-track {
		background: #eee;
	}

	::-webkit-scrollbar-thumb {
		background: #1ab394;
	}

</style>



</head>

<body>
	<div id="wrapper">
		<?php include("nav.html"); ?>

		<div id="page-wrapper" class="gray-bg dashbard-1">
			<div class="row border-bottom">
				<?php include("nav-top.html"); ?>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-primary pull-right">Active</span>
							<h5>Active Members</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingActiveMembers"></h1>
							<div class="stat-percent font-bold text-navy"></div>
							<small>Members </small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-info pull-right">Last 45 days</span>
							<h5>Reminder to Expire</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingPassOverMembers"></h1>
							
							<small>Members</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-warning pull-right">Inactive</span>
							<h5>Approval in Process</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingInActiveMembers"></h1>
							
							<small>Members</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-danger pull-right">Total</span>
							<h5>Total Members</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingTotalMembers"></h1>
							
							<small>Members</small>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-primary pull-right">Expired</span>
							<h5>Expired Members</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingExpiredMembers"></h1>
							<div class="stat-percent font-bold text-navy"></div>
							<small>Members </small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-info pull-right SpanMonth"></span>
							<h5>Monthly Income</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingMonthlyIncome"></h1>
							
							<small>PKR</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-warning pull-right SpanYear"></span>
							<h5>Yearly Income</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingYearlyIncome"></h1>
							
							<small>PKR</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-danger pull-right SpanPreviousYear"></span>
							<h5>Previous Year Income</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins HeadingPreviousYearIncome"></h1>
							
							<small>PKR</small>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Month Wise Members Registeration
							</h5>
							<div ibox-tools></div>
						</div>
						<div class="ibox-content">
							<div>
								<canvas id="barChart" height="140"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Year Wise Members</h5>
							<div ibox-tools></div>
						</div>
						<div class="ibox-content">
							<div>
								<canvas id="lineChart" height="140"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include("footerJS.html"); ?>
		<script>
			$(document).ready(function() {
				setTimeout(function() {
					toastr.options = {
						closeButton: true,
						progressBar: true,
						showMethod: 'slideDown',
						timeOut: 4000
					};
					toastr.success('REPA - Admin Panel', 'Welcome to REPA Admin');

				}, 1300);

			});

		</script>
		<script src="../PagesJS/Dashboard.js"></script>
	</body>


	</html>
