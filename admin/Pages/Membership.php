
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
					<h2>Membership</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">Membership</a>
						</li>
						<li class="active">
							<strong>Membership List</strong>
						</li>
					</ol>
				</div>
				<div class="col-lg-2">

				</div>
			</div>
			<div class="wrapper wrapper-content animated fadeInRight">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								Member
							</div>
							<div class="panel-body">
								<input type="button" data-toggle="modal" data-target="#CreateMember" class="btn btn-primary" value="Create New Member">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins">

							<div class="panel panel-primary">
								<div class="panel-heading">
									Membership Listing
								</div>
								<div class="panel-body" style="overflow: auto;height:500px;">

									<table class="table table-hover" id="myTable" >
										<thead>
											<tr class="success">
												<th>Title</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Father Name</th>
												<th>Gender </th>
												<th>BirthDate</th>
												<th>Nationality</th>
												<th>City</th>
												<th>Postal Code </th>
												<th>Present Address </th>
												<th>Permanent Address</th>
												<th>Landline</th>
												<th>Cell No</th>
												<th>Whatsapp No</th>
												<th>Email</th>
												<th>CNIC</th>
												<th>Attached With</th>
												<th>Business Started</th>
												<th>Located At</th>
												<th>Website</th>
												<th>Agent Designation</th>
												<th>Qualification </th>
												<th>Decipline </th>
												<th>Specialization </th>
												<th>Institute </th>
												<th>Passed Year</th>
												<th>Organization </th>
												<th>Designation </th>
												<th>Experience</th>
												<th>Membership Type</th>
												<th>Membership Fee</th>
												<th>R.Designation</th>
												<th>From</th>
												<th>Till</th>
												<th>Profile Picture</th>
												<th>CNIC</th>
												<th>Individual Sheet</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody class="MemberListing">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="modal fade" id="CreateMember">
				<div class="modal-dialog modal-lg" >
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Create Membership Form</h4>
						</div>

						<!-- Modal body -->
						<div class="modal-body">
							<div class="card-body FrmMembership">
								<form id="ValidateMembership" role="form">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtTitle">Title</label>
												<select class="form-control ddlTitle" >
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFirstName">First Name</label>
												<input type="text" class="form-control txtFirstName" id="txtFirstName"  placeholder="Enter first name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtLastName">Last Name</label>
												<input type="text" class="form-control txtLastName" id="txtLastName" placeholder="Enter last name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFatherName">Father name</label>
												<input type="text" class="form-control txtFatherName" id="txtFatherName" placeholder="Enter father name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlGender">Gender</label>
												<select class="form-control ddlGender" >
													<option selected="selected" value="0">--Select--</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFirstName">Date of Birth</label>
												<input type="text" class="form-control txtDob DatePickerComplete " id="txtDob" placeholder="mm/dd/yyyy">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="text">Nationality</label>
												<select class="form-control ddlNationality" >
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtCity">City</label>
												<input type="text" class="form-control txtCity" id="txtCity" placeholder="Enter city">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtPostalCode">Postal Code</label>
												<input type="text" class="form-control txtPostalCode numericOnly" id="txtPostalCode" placeholder="Enter postal code">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtPresentAddress">Present Address</label>
												<input type="text" class="form-control txtPresentAddress" id="txtPresentAddress" placeholder="Enter present address">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtPermanentAddress">Permanent Address</label>
												<input type="text" class="form-control txtPermanentAddress" id="txtPermanentAddress" placeholder="Enter permanent address">
											</div>
										</div>
										<div class="col-md-3 AppendAfterLandline ValidateLandline">
											<div class="form-group">
												<label for="txtLandline">Landline</label>
												&nbsp; <a href="#" style="color:black" 
												onclick="AppendAddLandline(this)"><i class="fa fa-plus-square"></i></a>
												<input type="text" class="form-control txtLandline numericOnly" id="txtLandline" placeholder="Enter landline number">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3 AppendAfterCellNo ValidateCellNo">
											<div class="form-group">
												<label for="txtCellNo">Cell #</label>
												&nbsp; <a href="#" style="color:black" 
												onclick="AppendAddCellNo(this)"><i class="fa fa-plus-square"></i></a>
												<input type="text" class="form-control txtCellNo numericOnly" id="txtCellNo" placeholder="Enter cell no">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtWhatsAppNo">WhatsApp #</label>
												<input type="text" class="form-control txtWhatsAppNo numericOnly" id="txtWhatsAppNo" placeholder="Enter whatsapp no">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtEmail">Email</label>
												<input type="text" class="form-control txtEmail" id="txtEmail" placeholder="Enter email">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtCNIC">CNIC</label>
												<input type="text" class="form-control txtCNIC numericOnly" id="txtCNIC" placeholder="Enter CNIC number">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtLinkdin">Linkedin</label>
												<input type="text" class="form-control txtLinkdin" id="txtLinkdin" placeholder="Enter your linkedin profile url">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFacebook">Facebook</label>
												<input type="text" class="form-control txtFacebook" id="txtFacebook" placeholder="Enter your facebook profile url">
											</div>
										</div>
									</div>
									<div class="card">
										<div class="alert alert-success" role="alert">
											Real Estate Agency
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtRealEstate">Attached With</label>
												<input type="text" class="form-control txtRealEstate" id="txtRealEstate" placeholder="Enter real estate name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlBusinessStartedYear">Business Started Since</label>
												<select class="form-control ddlBusinessStartedYear" >
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtLocation">Located At</label>
												<input type="text" class="form-control txtLocation" id="txtLocation" placeholder="Enter location">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtWebsite">Website</label>
												<input type="text" class="form-control txtWebsite" id="Website" placeholder="Enter website">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="txtAgentDesignation">Designation</label>
												<input type="text" class="form-control txtAgentDesignation" id="txtAgentDesignation" placeholder="Enter designation">
											</div>
										</div>

										<div class="col-md-4 AppendAfterWorkArea ValidateWorkArea">
											<div class="form-group">
												<label for="txtWorkArea">Working Area</label>
												&nbsp; <a href="#" style="color:black" onclick="AppendAddWorkArea(this)"><i class="fa fa-plus-square"></i></a>
												<input type="text" class="form-control txtWorkArea" id="txtWorkArea" placeholder="Enter work area">
											</div>
										</div>

										<div class="col-md-4 AppendAfterDealership ValidateDealership">
											<div class="form-group">
												<label for="txtDealership">Authorize Dealership</label>
												&nbsp; <a href="#" style="color:black" onclick="AppendAddDealership(this)"><i class="fa fa-plus-square"></i></a>
												<input type="text" class="form-control txtDealership" id="txtDealership" placeholder="Enter authorize dealership">
											</div>
										</div>


									</div>

									<div class="card"> 
										<div class="alert alert-success" role="alert"> 
											Real Estate Management Qualification
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="radio-inline">
													<input type="radio" onclick="QualificationHideShow()" class="radioCertificate" name="optradio" checked><strong>Real Estate Management Certificate</strong>
												</label>
												<label class="radio-inline">
													<input type="radio" onclick="QualificationHideShow()" class="radioDiploma" name="optradio"><strong>Real Estate Management Diploma</strong>
												</label>
												<label class="radio-inline">
													<input type="radio" onclick="QualificationHideShow()" class="radioBoth" name="optradio">
													<strong>Have Both</strong>
												</label>
											</div>
										</div>
									</div>
									<div class="row RowCertificate">
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlCertificateSession">Certificate course session</label>
												<select class="form-control ddlCertificateSession"></select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlCertificateYear">Certificate course year</label>
												<select class="form-control ddlCertificateYear"> 
													<option value="0">--Select--</option>
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002 </option>
													<option value="2003">2003 </option>
													<option value="2004">2004</option>
													<option value="2005">2005 </option>
													<option value="2006">2006 </option>
													<option value="2007">2007</option>
													<option value="2008">2008 </option>
													<option value="2009">2009 </option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012 </option>
													<option value="2013">2013</option>
													<option value="2014">2014 </option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>

												</select>

											</div>
										</div>
									</div>
									<div class="row RowDiploma">
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlDiplomaSession">Diploma course session</label>
												<select class="form-control ddlDiplomaSession"></select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlDiplomaYear">Diploma course year</label>
												<select class="form-control ddlDiplomaYear">
													<option value="0">--Select--</option> 
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002 </option>
													<option value="2003">2003 </option>
													<option value="2004">2004</option>
													<option value="2005">2005 </option>
													<option value="2006">2006 </option>
													<option value="2007">2007</option>
													<option value="2008">2008 </option>
													<option value="2009">2009 </option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012 </option>
													<option value="2013">2013</option>
													<option value="2014">2014 </option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
												</select>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="alert alert-success" role="alert">
											Acadmic Information
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="ddlQualification">Qualification</label>
												<select class="form-control ddlQualification">
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="ddlDecipline">Decipline</label>
												<select class="form-control ddlDecipline">
												</select>

											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="txtSpecialization">Specialization</label>
												<input type="text" class="form-control txtSpecialization" id="txtSpecialization" placeholder="Enter specialization">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="txtInstitute">Institute</label>
												<input type="text" class="form-control txtInstitute" id="txtInstitute" placeholder="Enter institute name">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="ddlPassedYear">Passed Year</label>
												<select class="form-control ddlPassedYear" >
												</select>
											</div>
										</div>

									</div>
									<div class="card">
										<div class="alert alert-success" role="alert">
											Professional/Work Information
										</div>
									</div>
									<div class="row AppendAfterWorkInfo Validate">
										<div class="col-md-4">
											<div class="form-group">
												<label for="txtQualification">Organization</label>
												<input type="text" class="form-control txtOrganization" id="txtOrganization" placeholder="Enter organization">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="txtDesignation">Designation</label>
												<input type="text" class="form-control txtDesignation" id="txtDesignation" placeholder="Enter designation">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="ddlWorkExperience">Experience</label>
												<select class="form-control ddlWorkExperience" >
													<option value="0">--Select--</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
												</select>
											</div>
										</div>

										<div class="col-md-1">
											<label></label>
											<button type="button" class="btn btn-primary btn-sm btnAddWork" onclick="AppendAddWorkRow(this)"><i class="fa fa-plus-square-o"></i> Add</button>
											<!--  <button type="button" class="btn btn-danger btn-sm btnRemoveWork"><i class="fas fa-minus"></i> Remove</button> -->
										</div>
									</div>

									<div class="card">
										<div class="alert alert-success" role="alert">
											Membership/Registration Fee
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlMembershipType">Membership Type</label>
												<select class="form-control ddlMembershipType">
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlMembershipFee">Membership Fee</label>
												<select class="form-control ddlMembershipFee">
												</select>
											</div>
										</div>


									</div>

									<div class="card">
										<div class="alert alert-success" role="alert">
											Other Info
										</div>
									</div>
									<div class="row">

										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlParentDesignation">Management Comit</label>
												<select class="form-control ddlParentDesignation">
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlDesignation">Sub Comity</label>
												<select class="form-control ddlDesignation">
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="ddlSubDesignation">Sub Designation</label>
												<select class="form-control ddlSubDesignation">
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="txtStartDate">Start Date</label>
												<input type="text" class="form-control DatePickerComplete txtStartDate"  id="txtStartDate" placeholder="mm/dd/yyyy" />
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group">
												<label for="txtEndDate">End Date</label>
												<input type="text" required="required" class="form-control DatePickerComplete txtEndDate"  id="txtEndDate" placeholder="mm/dd/yyyy" />
											</div>
										</div>

									</div>

									<div class="card">
										<div class="alert alert-success" role="alert">
											Personal Attachments
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<span class="btn btn-block btn-outline btn-primary btn-file"><span class="fileinput-new">Attach Recent Profile Picture</span>
												<i class="fa fa-upload"></i>&nbsp;&nbsp;
												<span class="fileinput-exists">Change</span><input type="file" name="..." class="txtFileImage" accept="image/*"/></span>
												<span class="fileinput-filename"></span>
												<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<span class="btn btn-block btn-outline btn-primary btn-file"><span class="fileinput-new">Attach Scan CNIC</span>
												<i class="fa fa-upload"></i>&nbsp;&nbsp;
												<span class="fileinput-exists">Change</span><input type="file"  class="txtFileCNIC" accept="image/*"/></span>
												<span class="fileinput-filename"></span>
												<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
											</div> 
										</div>
									</div>

								</div>
							</form>
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary btnSaveChanges" >Save Changes</button>
						</div>

					</div>
				</div>
			</div>

			<div class="modal fade" id="EditMember">
				<div class="modal-dialog modal-lg" >
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Membership Form</h4>
						</div>

						<!-- Modal body -->
						<div class="modal-body">
							<div class="card-body FrmMembership_upd">
								<form id="ValidateMembership_upd" role="form">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtTitle_upd">Title</label>
												<select class="form-control ddlTitle_upd" >
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFirstName_upd">First Name</label>
												<input type="text" class="form-control txtFirstName_upd" id="txtFirstName_upd"  placeholder="Enter first name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtLastName_upd">Last Name</label>
												<input type="text" class="form-control txtLastName_upd" id="txtLastName_upd" placeholder="Enter last name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFatherName_upd">Father name</label>
												<input type="text" class="form-control txtFatherName_upd" id="txtFatherName_upd" placeholder="Enter father name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlGender_upd">Gender</label>
												<select class="form-control ddlGender_upd" >
													<option selected="selected" value="0">--Select--</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFirstName_upd">Date of Birth</label>
												<input type="text" class="form-control txtDob_upd DatePickerComplete " id="txtDo_upd" placeholder="mm/dd/yyyy">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="text">Nationality</label>
												<select class="form-control ddlNationality_upd" >
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtCity_upd">City</label>
												<input type="text" class="form-control txtCity_upd" id="txtCity_upd" placeholder="Enter city">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtPostalCode">Postal Code</label>
												<input type="text" class="form-control txtPostalCode_upd numericOnly" id="txtPostalCode_upd" placeholder="Enter postal code">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtPresentAddress_upd">Present Address</label>
												<input type="text" class="form-control txtPresentAddress_upd" id="txtPresentAddress_upd" placeholder="Enter present address">
											</div>
										</div>
										<div class="col-md-3 AppendAfterLandline_upd">
											<div class="form-group">
												<label for="txtPermanentAddress_upd">Permanent Address</label>
												<input type="text" class="form-control txtPermanentAddress_upd" id="txtPermanentAddress" placeholder="Enter permanent address">
											</div>
										</div>


									</div>
									<div class="row">
										<div class="AppendAfterCellNo_upd"></div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtWhatsAppNo_upd">WhatsApp #</label>
												<input type="text" class="form-control txtWhatsAppNo_upd numericOnly" id="txtWhatsAppNo_upd" placeholder="Enter whatsapp no">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtEmail_upd">Email</label>
												<input type="text" class="form-control txtEmail_upd" id="txtEmail_upd" placeholder="Enter email">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtCNIC_upd">CNIC</label>
												<input type="text" class="form-control txtCNIC_upd numericOnly" id="txtCNIC_upd" placeholder="Enter CNIC number">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtLinkdin_upd">Linkedin</label>
												<input type="text" class="form-control txtLinkdin_upd" id="txtLinkdin_upd" placeholder="Enter your linkedin profile url">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtFacebook_upd">Facebook</label>
												<input type="text" class="form-control txtFacebook_upd" id="txtFacebook_upd" placeholder="Enter your facebook profile url">
											</div>
										</div>
									</div>
									<div class="card">
										<div class="alert alert-success" role="alert">
											Real Estate Agency
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtRealEstate_upd">Attached With</label>
												<input type="text" class="form-control txtRealEstate_upd" id="txtRealEstate_upd" placeholder="Enter real estate name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlBusinessStartedYear_upd">Business Started Since</label>
												<select class="form-control ddlBusinessStartedYear_upd" >
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtLocation_upd">Located At</label>
												<input type="text" class="form-control txtLocation_upd" id="txtLocation" placeholder="Enter location">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="txtWebsite_upd">Website</label>
												<input type="text" class="form-control txtWebsite_upd" id="Website" placeholder="Enter website">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 AppendAfterWorkArea_upd ">
											<div class="form-group">
												<label for="txtAgentDesignation_upd">Designation</label>
												<input type="text" class="form-control txtAgentDesignation_upd" id="txtAgentDesignation_upd" placeholder="Enter designation">
											</div>
										</div>

										<div class="AppendAfterDealership_upd ">
										</div>


									</div>

									<div class="card"> 
										<div class="alert alert-success" role="alert"> 
											Real Estate Management Qualification
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="radio-inline">
													<input type="radio" onclick="QualificationHideShow_upd()" class="radioCertificate_upd" name="optradio" ><strong>Real Estate Management Certificate</strong>
												</label>
												<label class="radio-inline">
													<input type="radio" onclick="QualificationHideShow_upd()" class="radioDiploma_upd" name="optradio"><strong>Real Estate Management Diploma</strong>
												</label>
												<label class="radio-inline">
													<input type="radio" onclick="QualificationHideShow_upd()" class="radioBoth_upd" name="optradio">
													<strong>Have Both</strong>
												</label>
											</div>
										</div>
									</div>
									<div class="row RowCertificate_upd">
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlCertificateSession_upd">Certificate course session</label>
												<select class="form-control ddlCertificateSession_upd"></select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlCertificateYear_upd">Certificate course year</label>
												<select class="form-control ddlCertificateYear_upd"> 
													<option value="0">--Select--</option>
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002 </option>
													<option value="2003">2003 </option>
													<option value="2004">2004</option>
													<option value="2005">2005 </option>
													<option value="2006">2006 </option>
													<option value="2007">2007</option>
													<option value="2008">2008 </option>
													<option value="2009">2009 </option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012 </option>
													<option value="2013">2013</option>
													<option value="2014">2014 </option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>

												</select>

											</div>
										</div>
									</div>
									<div class="row RowDiploma_upd">
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlDiplomaSession_upd">Diploma course session</label>
												<select class="form-control ddlDiplomaSession_upd"></select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlDiplomaYear_upd">Diploma course year</label>
												<select class="form-control ddlDiplomaYear_upd">
													<option value="0">--Select--</option> 
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002 </option>
													<option value="2003">2003 </option>
													<option value="2004">2004</option>
													<option value="2005">2005 </option>
													<option value="2006">2006 </option>
													<option value="2007">2007</option>
													<option value="2008">2008 </option>
													<option value="2009">2009 </option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012 </option>
													<option value="2013">2013</option>
													<option value="2014">2014 </option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
												</select>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="alert alert-success" role="alert">
											Acadmic Information
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="ddlQualification_upd">Qualification</label>
												<select class="form-control ddlQualification_upd">
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="ddlDecipline_upd">Decipline</label>
												<select class="form-control ddlDecipline_upd">
												</select>

											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="txtSpecialization_upd">Specialization</label>
												<input type="text" class="form-control txtSpecialization_upd" id="txtSpecialization_upd" placeholder="Enter specialization">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="txtInstitute_upd">Institute</label>
												<input type="text" class="form-control txtInstitute_upd" id="txtInstitute_upd" placeholder="Enter institute name">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="ddlPassedYear_upd">Passed Year</label>
												<select class="form-control ddlPassedYear_upd" >
												</select>
											</div>
										</div>

									</div>
									<div class="card Validate_upd">
										<div class="alert alert-success" role="alert">
											Professional/Work Information
										</div>
									</div>


									<div class="card">
										<div class="alert alert-success" role="alert">
											Membership/Registration Fee
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlMembershipType_upd">Membership Type</label>
												<select class="form-control ddlMembershipType_upd">
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="ddlMembershipFee_upd">Membership Fee</label>
												<select class="form-control ddlMembershipFee_upd">
												</select>
											</div>
										</div>


									</div>

									<div class="card">
										<div class="alert alert-success" role="alert">
											Other Info
										</div>
									</div>
									<div class="row">

										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlParentDesignation_upd">Management Comit</label>
												<select class="form-control ddlParentDesignation_upd">
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="ddlDesignation_upd">Sub Comity</label>
												<select class="form-control ddlDesignation_upd">
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="ddlSubDesignation_upd">Sub Designation</label>
												<select class="form-control ddlSubDesignation_upd">
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="txtStartDate">Start Date</label>
												<input type="text" class="form-control DatePickerComplete txtStartDate_upd"  id="txtStartDate_upd" placeholder="mm/dd/yyyy" />
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group">
												<label for="txtEndDate">End Date</label>
												<input type="text" required="required" class="form-control DatePickerComplete txtEndDate_upd"  id="txtEndDate" placeholder="mm/dd/yyyy" />
											</div>
										</div>

									</div>

									
									

								</div>
							</form>
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary btnUpdateChanges" >Save Changes</button>
						</div>

					</div>
				</div>
			</div>
			<div id="NotificationModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Notify Changes</h4>
						</div>
						<div class="modal-body">
							<div class="card-body FrmNotification">

								<div class="row"> 
									<div class="col-lg-12"> 
										<div class="form-group">
											<label for="ddlNotificationType " class="LblReason">Select Reason</label>
											<select class="form-control ddlNotificationType" >
											</select>
										</div>
									</div>
									<div class="col-lg-12"> 
										<div class="form-group">
											<label for="txtMessage">Message</label>
											<input type="text" row="6" class="form-control txtMessage" id="txtMessage"/> 

										</div>
									</div>
								</div>


							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary btnNotificationSaveChanges">Save Changes</button>
						</div>
					</div>

				</div>
			</div>

			<!--View Profile Modal-->

			<!--View Profile Modal End-->

			<!--Print Start-->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Modal Header</h4>
						</div>
						<div class="modal-body">
							<div id="Print">
								<table style ="width: 100%; height: 100%; color: black;
								font-family:'open sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:14px;">
								<thead>
									<tr class="trPrint" style="background-color: #c8560f;line-height: 2.1;color: white;">
										<td colspan="3" style="font-weight: 800;font-size: 16px">&nbsp;Member's Profile</td>
									</tr>
									<tr style="height:145px">
										<td>
											<img height="130px;" class="tdProfilePicPrint" width="130px;" alt="User Pic" src=""  style=""> 
										</td>
										<td><label>Membership: </label>
											<br>
											<label>Membership Type: </label>
											<br>
											<label class="tdParentDesignationPrint"> </label>
											<br>
											<label>Tenure:</label>
										</td>

										<td align="right">

											<label style="background: #c8560f;color: #fff;padding: 2px;margin: -3px;border-radius: 4px;" class="tdMembershipNoPrint"></label>
											<br>

											<label class="tdMembershipTypePrint" style="background: #c8560f;color: #fff;padding: 2px;margin: -3px;border-radius: 4px;"></label>
											<br>

											<label class="tdSubDesignationPrint" style="background: #c8560f;color: #fff;padding: 2px;margin: -3px;border-radius: 4px;"></label>
											<br>

											<label class="tdTenurePrint" style="background: #c8560f;color: #fff;padding: 2px;margin: 0px;border-radius: 4px;">2018-11-17 to 2018-12-18</label>
										</td>
									</tr>
								</thead>
								<tbody>
									<tr class="trPrint5" style="background-color: #c8560f;color: white;">
										<td colspan="3" style="font-weight: 800;font-size: 16px">&nbsp;Personal Information</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Name
										</td>
										<td class="tdNamePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Academic Background
										</td>
										<td class="tdAcademicBackgroundPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Work Experience
										</td>
										<td class="tdWorkExperiencePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> </td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Cell #
										</td>
										<td class="tdCellNoPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>

									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Landline
										</td>
										<td class="tdLandlinePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>


									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Email
										</td>
										<td class="tdEmailPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Linkedin
										</td>
										<td class="tdLinkedinPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Facebook
										</td>
										<td class="tdFacebookPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr class="trPrint5" style="background-color: #c8560f;color: white;">
										<td colspan="3" style="font-weight: 800;font-size: 16px">&nbsp;
										Real Estate Management Qualification</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Certificate course
										</td>
										<td class="tdCertificateCoursePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Diploma course
										</td>
										<td class="tdDiplomaCoursePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr class="trPrint5" style="background-color: #c8560f;color: white;">
										<td colspan="3" style="font-weight: 800;font-size: 16px">&nbsp;Agency information</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Agency name
										</td>
										<td class="tdAgencyNamePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Website
										</td>
										<td class="tdWebsitePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Designation/ Position
										</td>
										<td class="tdAgentDesignationPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Associated since
										</td>
										<td class="tdAssociatedsincePrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Agency location
										</td>
										<td class="tdAgencylocationPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Working area
										</td>
										<td class="tdWorkingAreaPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"></td>
									</tr>
									<tr style="line-height:35px;">
										<td style="border-bottom: 1px solid #e7eaec">
											Dealership (if any)
										</td>
										<td class="tdDealershipPrint" style="border-bottom: 1px solid #e7eaec" colspan="2"> 
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btnPrint" >Close</button>
					</div>
				</div>

			</div>
		</div>
		<!--Print End-->

		<div id="EditAttachments" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Attachments</h4>
					</div>
					<div class="modal-body">
						<div class="card-body FrmAttachments">
							<div class="card">
								<div class="alert alert-success" role="alert">
									Personal Attachments
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="fileinput fileinput-new" data-provides="fileinput">
										<span class="btn btn-block btn-outline btn-primary btn-file"><span class="fileinput-new">Attach Recent Profile Picture</span>
										<i class="fa fa-upload"></i>&nbsp;&nbsp;
										<span class="fileinput-exists">Change</span><input type="file" name="..." class="txtFileImage_upd" accept="image/*"/></span>
										<span class="fileinput-filename"></span>
										<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="fileinput fileinput-new" data-provides="fileinput">
										<span class="btn btn-block btn-outline btn-primary btn-file"><span class="fileinput-new">Attach Scan CNIC</span>
										<i class="fa fa-upload"></i>&nbsp;&nbsp;
										<span class="fileinput-exists">Change</span><input type="file"  class="txtFileCNIC_upd" accept="image/*"/></span>
										<span class="fileinput-filename"></span>
										<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
									</div> 
								</div>
							</div>


						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary btnUpdateAttachments" >Update Changes</button>
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
<script src="../PagesJS/Members.js"></script>


<script type="text/x-jQuery-tmpl" id="MemberListing">
	<tr class="trMember">
		<input type="hidden" class="hdnMembershipId" value="${MembershipId}" />
		<input type="hidden" class="hdnQualificationId" value="${QualificationId}" />
		<input type="hidden" class="hdnNationalityId" value="${NationalityId}" />
		<input type="hidden" class="hdnMembershipTypeId" value="${MembershipTypeId}" />
		<input type="hidden" class="hdnMembershipFeeId" value="${MembershipFeeId}" />
		<input type="hidden" class="hdnJsonWorkInfo" value="${JsonWorkInfo}" />
		<input type="hidden" class="hdnIsMember" value="${IsMember}" />
		<input type="hidden" class="hdnDesignationId" value="${DesignationId}" />
		<input type="hidden" class="hdnDesignation" value="${Designation}" />
		<input type="hidden" class="hdnWorkArea" value="${WorkArea}" />
		<input type="hidden" class="hdnDealership" value="${Dealership}" />
		<input type="hidden" class="hdnLinkedin" value="${Linkdin}" />
		<input type="hidden" class="hdnFacebook" value="${Facebook}" />
		<input type="hidden" class="hdnDeciplineId" value="${DeciplineId}" />
		<input type="hidden" class="hdnTitleId" value="${TitleId}" />
		<input type="hidden" class="hdnCellNo" value="${CellNo}" />
		<input type="hidden" class="hdnLandline" value="${Landline}" />
		<input type="hidden" class="hdnQualificationType" value="${QualificationType}" />
		<input type="hidden" class="hdnDiplomaSessionId" value="${DiplomaSessionId}" />
		<input type="hidden" class="hdnDiplomaSession" value="${DiplomaSession}" />
		<input type="hidden" class="hdnDiplomaYear" value="${DiplomaYear}" />
		<input type="hidden" class="hdnCertificateSessionId" value="${CertificateSessionId}" />
		<input type="hidden" class="hdnCertificateSession" value="${CertificateSession}" />
		<input type="hidden" class="hdnCertificateYear" value="${CertificateYear}" />
		<input type="hidden" class="hdnParentDesignationId" value="${ParentDesignationId}" />
		<input type="hidden" class="hdnParentDesignation" value="${ParentDesignation}" />
		<input type="hidden" class="hdnSubDesignationId" value="${SubDesignationId}" />
		<input type="hidden" class="hdnSubDesignation" value="${SubDesignation}" />
		<input type="hidden" class="hdnStartDate" value="${formatDate(StartDate)}" />
		<input type="hidden" class="hdnEndDate" value="${formatDate(EndDate)}" />
		<input type="hidden" class="hdnWebsite" value="${Website}" />
		<input type="hidden" class="hdnFileImage" value="${FileImage}" />
		<input type="hidden" class="hdnMembershipNo" value="${MembershipNo}" />
		<td class="project-title tdTitle">${Title}</td>
		<td class="project-title tdFirstName">${FirstName}</td>
		<td class="project-title tdLastName">${LastName}</td>
		<td class="project-title tdFatherName">${FatherName}</td>
		<td class="project-title tdGender">${Gender}</td>
		<td class="project-title tdDob">${formatDate(Dob)}</td>
		<td class="project-title tdNationality">${Nationality}</td>
		<td class="project-title tdCity">${City}</td>
		<td class="project-title tdPostalCode">${PostalCode}</td>
		<td class="project-title tdPresentAddress">${PresentAddress}</td>
		<td class="project-title tdPermanentAddress">${PermanentAddress}</td>
		<td class="project-title tdLandline">{{html htmlBr(Landline,'Landline') }}</td>
		<td class="project-title tdCellNo">{{html htmlBr(CellNo,'CellNo') }}</td>
		<td class="project-title tdWhatsAppNo">${WhatsAppNo}</td>
		<td class="project-title tdEmail">${Email}</td>
		<td class="project-title tdCNIC">${CNIC}</td>
		<td class="project-title tdRealEstate">${RealEstate}</td>
		<td class="project-title tdBusinessStartedYear">${BusinessStartedYear}</td>
		<td class="project-title tdLocation">${Location}</td>
		<td class="project-title tdWebsite">${Website}</td>
		<td class="project-title tdAgentDesignation">${AgentDesignation}</td>
		<td class="project-title tdQualification">${Qualification}</td>
		<td class="project-title tdDecipline">${Decipline}</td>
		<td class="project-title tdSpecialization">${Specialization}</td>
		<td class="project-title tdInstitute">${Institute}</td>
		<td class="project-title tdPassedYear">${PassedYear}</td>
		<td class="project-title tdOrganization">{{html htmlBr(JsonWorkInfo,'Organization') }}</td>
		<td class="project-title tdDesignation">{{html htmlBr(JsonWorkInfo,'Designation') }}</td>
		<td class="project-title tdExperience">{{html htmlBr(JsonWorkInfo,'Experience') }}</td>
		<td class="project-title tdMembershipType">${MembershipType}</td>
		<td class="project-title tdMembershipFee">${MembershipFee}</td>


		<td class="project-title tdRepaDesignation">${Designation}</td>
		<td class="project-title tdStartDate">${formatDate(StartDate)== undefined ? 'N/A' : formatDate(StartDate)}</td>
		<td class="project-title tdEndDate">${formatDate(EndDate) == undefined ? 'N/A' : formatDate(EndDate) }</td>
		<td class="project-title tdFileImage">
			<a href="#" download="${FileImage.trim()}">
				<img class="img-responsive" src="../upload/${FileImage.trim()}"  style="width:100px;">
			</a>
		</td>
		<td class="project-title tdFileCNIC">
			<a href="#" download="${FileCNIC.trim()}">
				<img class="img-responsive" src="../upload/${FileCNIC.trim().replace(/"/g, '\'')}" download="${FileCNIC}" style="width:100px;">
			</a>
		</td>
		<td class="project-title tdViewProfileModal">
			<input type="button" data-toggle="modal" data-target="#myModal" onclick="BindProfile(this)"  value="View Details" class="btn btn-group btn-xs btn-info"   />
		</td>
		<td class="project-title">
			<input type="button" onclick="EditIsMember(this)" value="${IsMember == 1 ? 'Inactive' : 'Active' }" class="${IsMember == 1 ? 'btn btn-xs btn-danger ' : 'btn btn-xs btn-warning'}" />
		</td>
		<td class="project-title">
			<input type="button" data-toggle="modal" data-target="#EditAttachments" value="Edit Attachments" onclick="editMembership(this)" class="btn btn-group btn-xs btn-info"   />
			<input type="button" data-toggle="modal" data-target="#EditMember" onclick="editMembership(this)" value="Edit Details" class="btn btn-group btn-xs btn-primary"   />

		</td>

	</tr>
</script>





</html>
