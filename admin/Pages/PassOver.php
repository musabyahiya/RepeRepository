
<?php
session_start();
if(!isset($_SESSION['UserId'])){
	echo '<script type="text/javascript"> window.location.href = "../Login.php" </script>';
}

?>
<!DOCTYPE html>
<html>

<head>

	<title>Repa - Real Estate Professional Association of Pakistan - Membership</title>

	<?php include("head.html"); ?>
</head>

<body>
	<div id="wrapper">
		<?php include("nav.html"); ?>

		<div id="page-wrapper" class="gray-bg" style="min-height: 1167px;">
			<div class="row border-bottom">
				<?php include("nav-top.html"); ?>
			</div>
			<div class="row wrapper border-bottom white-bg page-heading">
				<div class="col-lg-10">
					<h2>Pass Over</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">Pass Over</a>
						</li>
						<li class="active">
							<strong>Pass Over List</strong>
						</li>
					</ol>
				</div>
				<div class="col-lg-2">

				</div>
			</div>
			<div class="wrapper wrapper-content animated fadeInRight">
				
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins">
							
							<div class="panel panel-primary">
								<div class="panel-heading">
									Pass Over Listing
								</div>
								<div class="panel-body" style="overflow: auto;height:500px;">

									<table class="table table-hover" >
										<thead>
											<tr class="success">
												<th>First Name</th>
												<th>Last Name</th>
												<th>RealEstate</th>
												<th>MembershipType</th>
												<th>MembershipFee</th>
												<th>Designation</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody class="PassOverListing">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>


			<div class="footer">
				<div>
					<strong>Copyright</strong> REPA © 2018
				</div>
			</div>

		</div>
		

		<?php include("footerJS.html"); ?>


	</body>
	<script src="../PagesJS/PassOver.js"></script>
	<script type="text/x-jQuery-tmpl" id="PassOverListing">
		<tr class="trMember">
			<input type="hidden" class="hdnMembershipId" value="${MembershipId}" />
			<input type="hidden" class="hdnEmail" value="${Email}" />
			<input type="hidden" class="hdnDifference" value="${Difference}" />
			<td class="project-title tdFirstName">${FirstName}</td>
			<td class="project-title tdLastName">${LastName}</td>
			<td class="project-title tdRealEstate">${RealEstate}</td>
			<td class="project-title tdMembershipType">${MembershipType}</td>
			<td class="project-title tdMembershipFee">${MembershipFee}</td>
			<td class="project-title tdRepaDesignation">${Designation}</td>
			<td class="project-title tdStartDate">${formatDate(StartDate)}</td>
			<td class="project-title tdEndDate">${formatDate(EndDate)}</td>
			<td class="project-title">
				<input type="button"  value="${Difference < 0 ? 'Expired' : 'Near to expire' }" class="${Difference < 0 ? 'btn btn-xs btn-danger ' : 'btn btn-xs btn-warning'}" />
			</td>
			<td class="project-title">
				<input type="button" onclick="SendEmail(this)" value="${IsMailSent == 1 ? 'Sent' : 'Send Email' }" class="${IsMailSent == 1 ? 'btn btn-xs btn-success ' : 'btn btn-xs btn-info'}" />
			</td>
			
		</tr>
	</script>

	
	</html>
