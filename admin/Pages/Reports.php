
<?php
session_start();
if(!isset($_SESSION['UserId'])){
	echo '<script type="text/javascript"> window.location.href = "../Login.php" </script>';
}

?>
<!DOCTYPE html>
<html>

<head>

	<title>Repa - Real Estate Professional Association of Pakistan - Reports</title>

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
					<h2>Reports</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">Reports</a>
						</li>
						<li class="active">
							<strong>Reports List</strong>
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
									Reports Listing
								</div>
								<div class="panel-body" style="overflow: auto;height:500px;">

									<table class="table table-hover" >
										<thead>
											<tr class="success">
												<th>Sr.No.</th>
												<th>Report</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody class="ReportsListing">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="display:none;">
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr class="success">
								<th>Sr.No.</th>
								<th>Membership No</th>
								<th>Name</th>
								<th>Membership Type</th>
								<th>Agency Name</th>
								<th>Located At</th>
								<th>Cell No</th>
								<th>Landline</th>
								<th>Whatsapp No</th>
								<th>Email</th>
								<th>Dob</th>
								<th>City</th>
								<th>Contact Address</th>
								<th>CNIC</th>
								<th>Qualification</th>
								<th>Decipline</th>
								<th>Repa Designation</th>
							</tr>
						</thead>
						<tbody class="MembersListing">
						</tbody>
					</table>
				</div>

				<div class="row" style="display:none;">
					<table class="table table-bordered" id="myTableConcise">
						<thead>
							<tr class="success">
								<th>Sr.No.</th>
								<th>Membership No</th>
								<th>Name</th>
								<th>Membership Type</th>
								<th>Agency Name</th>
								<th>Located At</th>
								<th>Cell No</th>
								<th>Landline</th>
								<th>Whatsapp No</th>
								<th>Email</th>
								<th>Membership Fee</th>
								<th>From</th>
								<th>Till</th>
							</tr>
						</thead>
						<tbody class="MembersListingConcise">
						</tbody>
					</table>
				</div>
				<div class="row" style="display:none;">
					<table class="table table-bordered" id="myTableGeneral">
						<thead>
							<tr class="success">
								<th>Sr.No.</th>
								<th>Membership No</th>
								<th>Name</th>
								<th>Membership Type</th>
								<th>Agency Name</th>
								<th>Located At</th>
								<th>Cell No</th>
								<th>Landline</th>
								<th>Whatsapp No</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody class="MembersListingGeneral">
						</tbody>
					</table>
				</div>

			</div>
			<div class="footer">
				<div>
					<strong>Copyright</strong> REPA © 2018
				</div>
			</div>

		</div>


		

	</div>


	<?php include("footerJS.html"); ?>


</body>
<script src="../PagesJS/Reports.js"></script>
<script type="text/x-jQuery-tmpl" id="ReportsListing">
	<tr class="trReports">
		<input type="hidden" class="hdnReportId" value="${ReportId}" />
		<td></td>
		<td class="project-title tdReport">${Report}</td>
		<td class="project-title">
			<button type="button" class="btn btn-group  btn-primary ${ButtonClass}">
				<i class="fa fa-file-excel-o"></i>
				&nbsp;&nbsp;Export to Excel
			</button>

		</td>

	</tr>
</script>
<script type="text/x-jQuery-tmpl" id="MembersListing">
	<tr class="trMembers">
		<input type="hidden" class="hdnMembershipId" value="${MembershipId}" />
		<td></td>
		<td class="project-title tdMembershipNo">${MembershipNo}</td>
		<td class="project-title tdName">${FirstName} ${LastName}</td>
		<td class="project-title tdMembershipType">${MembershipType}</td>
		<td class="project-title tdRealEstate">${RealEstate}</td>
		<td class="project-title tdLocation">${Location}</td>
		<td class="project-title tdCellNo">&nbsp;${JSON.parse(CellNo)[0].CellNo}</td>
		<td class="project-title tdLandline">${JSON.parse(Landline)[0].Landline}</td>
		<td class="project-title tdWhatsAppNo">${WhatsAppNo}</td>
		<td class="project-title tdEmail">${Email}</td>
		<td class="project-title tdDob ">${formatDate(Dob)}</td>
		<td class="project-title tdCity">${City}</td>
		<td class="project-title tdPresentAddress">${PresentAddress}</td>
		<td class="project-title tdCNIC">&nbsp;${CNIC}</td>
		<td class="project-title tdQualification">${Qualification}</td>
		<td class="project-title tdDecipline">${Decipline}</td>
		<td class="project-title tdMembershipNo">${ParentDesignation} - ${SubDesignation}</td>
	</tr>
</script>

<script type="text/x-jQuery-tmpl" id="MembersListingConcise">
	<tr class="trMembersConcise">
		<input type="hidden" class="hdnMembershipId" value="${MembershipId}" />
		<td></td>
		<td class="project-title tdMembershipNo">${MembershipNo}</td>
		<td class="project-title tdName">${FirstName} ${LastName}</td>
		<td class="project-title tdMembershipType">${MembershipType}</td>
		<td class="project-title tdRealEstate">${RealEstate}</td>
		<td class="project-title tdLocation">${Location}</td>
		<td class="project-title tdCellNo">&nbsp;${JSON.parse(CellNo)[0].CellNo}</td>
		<td class="project-title tdLandline">&nbsp;${JSON.parse(Landline)[0].Landline}</td>
		<td class="project-title tdWhatsAppNo">${WhatsAppNo}</td>
		<td class="project-title tdEmail">${Email}</td>
		<td class="project-title tdMembershipFee">${MembershipFee}</td>
		<td class="project-title tdStartDate">${StartDate}</td>
		<td class="project-title tdEndDate">${EndDate}</td>
	</tr>
</script>


<script type="text/x-jQuery-tmpl" id="MembersListingGeneral">
	<tr class="trMembersGeneral">
		<input type="hidden" class="hdnMembershipId" value="${MembershipId}" />
		<td></td>
		<td class="project-title tdMembershipNo">${MembershipNo}</td>
		<td class="project-title tdName">${FirstName} ${LastName}</td>
		<td class="project-title tdMembershipType">${MembershipType}</td>
		<td class="project-title tdRealEstate">${RealEstate}</td>
		<td class="project-title tdLocation">${Location}</td>
		<td class="project-title tdCellNo">&nbsp;${JSON.parse(CellNo)[0].CellNo}</td>
		<td class="project-title tdLandline">&nbsp;${JSON.parse(Landline)[0].Landline}</td>
		<td class="project-title tdWhatsAppNo">${WhatsAppNo}</td>
		<td class="project-title tdEmail">${Email}</td>
	</tr>
</script>

</html>
