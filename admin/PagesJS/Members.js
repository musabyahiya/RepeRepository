GetAllNationality();
GetAllDiplomaSession();
GetAllCertificateSession();
GetAllDecipline();
GetAllSubDesignation();
GetAllYears();
GetAllTitle();
GetAllNotificationType();
GetAllDesignation();
GetAllQualification();
AllClickFunction();
GetAllMembershipType();
AllChangeFunction();
GetAllMembershipFee();
GetAllMember();
GetAllParentDesignation();
QualificationHideShow();
var objEditRow;
var foo;
var IsMember;
var MembershipList;
var MembershipId;
var MembershipFeeList;
var DesignationList;
var NotificationTypeList;
var SubDesignationList;
var workinfo = [];
var workarea = [];
var dealership = [];
var cellno = [];
var landline = [];
var Members = [
{
	MembershipId: 0,
	TitleId: 0,
	FirstName: null,
	LastName: null,
	Gender: null,
	Dob: null,
	NationalityId: 0,
	City: null,
	DiplomaSessionId: 0,
	CertificateSessionId: 0,
	FatherName: null,
	DiplomaYear: null,
	CertificateYear: null,
	QualificationType : 0,
	PostalCode: 0,
	PresentAddress: null,
	PermanentAddress: null,
	Landline: null,
	CellNo: null,
	WhatsAppNo: null,
	Email: null,
	CNIC: null,
	RealEstate: null,
	DeciplineId: 0,
	BusinessStartedYear: 0,
	Location: null,
	AgentDesignation: null,
	WorkArea: null,
	Dealership: null,
	Linkdin: null,
	Facebook: null,
	Website: null,
	QualificationId: 0,
	Specialization: null,
	Institute: null,
	PassedYear: 0,
	MembershipTypeId: 0,
	MembershipFeeId: 0,
	DesignationId: 0,
	StartDate: 0,
	EndDate: 0,
	JsonWorkInfo: null,
	FileImage: null,
	FileCNIC: null,
	IsMember: 0,
	MembershipNo: null,
	ParentDesignationId: 0,
	SubDesignationId: 0
}
];
function AllClickFunction() {

	$(".btnPrint").click(function () {
		var contents = $("#Print").html();
		var frame1 = $('<iframe />');
		frame1[0].name = "frame1";
		frame1.css({ "position": "absolute", "top": "-1000000px" });
		$("body").append(frame1);
		var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
		frameDoc.document.open();
                //Create a new HTML document.
                frameDoc.document.write('<html><head><title>Profile Repa</title>');
                frameDoc.document.write('</head><body>');
                //Append the external CSS file.
                frameDoc.document.write('<link href="print.css" rel="stylesheet" type="text/css" />');
                //Append the DIV contents.
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function () {
                	window.frames["frame1"].focus();
                	window.frames["frame1"].print();
                	frame1.remove();
                }, 500);
            });

	$(".btnNotificationSaveChanges").click(function() {
		if (!validateForm(".FrmNotification")) return;
		var NotificationTypeId = $(".ddlNotificationType").val();
		var Message = $(".txtMessage").val();
		UpdateMemberStatus(NotificationTypeId,Message);
	});

	$(".btnUpdateAttachments").click(function() {
		//if (!validateForm(".FrmAttachments")) return;
		var FileImage = FileUpload(".txtFileImage_upd").trim();
		var FileCNIC = FileUpload(".txtFileCNIC_upd").trim();

		UpdateAttachments(FileImage,FileCNIC);
	});
	$(".btnSaveChanges").click(function() {

		MembershipValidation();
		$(".txtPermanentAddress").val("N/A");
		$(".txtWhatsAppNo").val("N/A");
		$(".txtLandline").val("N/A");
		

		if (!validateForm(".FrmMembership")) return;

		AddRowControlToJSON();
		Members[0].TitleId = $(".ddlTitle").val();
		Members[0].FirstName = $(".txtFirstName").val();
		Members[0].LastName = $(".txtLastName").val();
		Members[0].FatherName = $(".txtFatherName").val();
		Members[0].Gender = $(".ddlGender").val();
		Members[0].Dob = formatDate($(".txtDob").val());
		Members[0].NationalityId = $(".ddlNationality").val();
		Members[0].City = $(".txtCity").val();
		Members[0].DiplomaSessionId = $(".ddlDiplomaSession").val();
		Members[0].CertificateSessionId = $(".ddlCertificateSession").val();
		Members[0].DiplomaYear = $(".ddlDiplomaYear").val();
		Members[0].CertificateYear = $(".ddlCertificateYear").val();
		Members[0].QualificationType =  foo = (
  		$('.radioCertificate').prop('checked') == true ? 1 : // if
  		$('.radioDiploma').prop('checked') == true ? 2 : // else if
  		$('.radioBoth').prop('checked') == true ? 3 : // else if
  		0); 
		Members[0].PostalCode = $(".txtPostalCode").val();
		Members[0].PresentAddress = $(".txtPresentAddress").val();
		Members[0].PermanentAddress = $(".txtPermanentAddress").val();
		Members[0].Landline = JSON.stringify(landline);
		Members[0].CellNo = JSON.stringify(cellno);
		Members[0].WhatsAppNo = $(".txtWhatsAppNo").val();
		Members[0].Email = $(".txtEmail").val();
		Members[0].CNIC = $(".txtCNIC").val();
		Members[0].Linkdin = $(".txtLinkdin").val();
		Members[0].Website = $(".txtWebsite").val();
		Members[0].Facebook = $(".txtFacebook").val();
		Members[0].RealEstate = $(".txtRealEstate").val();
		Members[0].BusinessStartedYear = $(".ddlBusinessStartedYear").val();
		Members[0].DeciplineId = $(".ddlDecipline").val();
		Members[0].Location = $(".txtLocation").val();
		Members[0].AgentDesignation = $(".txtAgentDesignation").val();
		Members[0].WorkArea = JSON.stringify(workarea);
		Members[0].Dealership = JSON.stringify(dealership);
		Members[0].QualificationId = $(".ddlQualification").val();
		Members[0].Specialization = $(".txtSpecialization").val();
		Members[0].Institute = $(".txtInstitute").val();
		Members[0].PassedYear = $(".ddlPassedYear").val();
		Members[0].MembershipTypeId = $(".ddlMembershipType").val();
		Members[0].MembershipFeeId = $(".ddlMembershipFee").val();
		Members[0].JsonWorkInfo = JSON.stringify(workinfo);
		Members[0].DesignationId = $(".ddlDesignation").val();
		Members[0].ParentDesignationId = $(".ddlParentDesignation").val();
		Members[0].SubDesignationId = $(".ddlSubDesignation").val();
		Members[0].StartDate = formatDate($(".txtStartDate").val());
		Members[0].EndDate = formatDate($(".txtEndDate").val());
		Members[0].FileImage = FileUpload(".txtFileImage").trim();
		Members[0].FileCNIC = FileUpload(".txtFileCNIC").trim();
		Members[0].IsMember = 0;
		Members[0].MembershipNo = 0;


		if (!isValidEmailAddress(Members[0].Email)) {
			showError("Email is Incorrect!");
			return;
		}
	//	CreateNewMember();
});

	$(".btnUpdateChanges").click(function() {
		MembershipValidation_upd();
		if (!validateForm(".FrmMembership_upd")) return;

		AddRowControlToJSON_upd();

		Members[0].TitleId = $(".ddlTitle_upd").val();
		Members[0].FirstName = $(".txtFirstName_upd").val();
		Members[0].LastName = $(".txtLastName_upd").val();
		Members[0].FatherName = $(".txtFatherName_upd").val();
		Members[0].Gender = $(".ddlGender_upd").val();
		Members[0].Dob = formatDate($(".txtDob_upd").val());
		Members[0].NationalityId = $(".ddlNationality_upd").val();
		Members[0].City = $(".txtCity_upd").val();
		Members[0].DiplomaSessionId = $(".ddlDiplomaSession_upd").val();
		Members[0].CertificateSessionId = $(".ddlCertificateSession_upd").val();
		Members[0].DiplomaYear = $(".ddlDiplomaYear_upd").val();
		Members[0].CertificateYear = $(".ddlCertificateYear_upd").val();
		Members[0].QualificationType =  foo = (
  		$('.radioCertificate_upd').prop('checked') == true ? 1 : // if
  		$('.radioDiploma_upd').prop('checked') == true ? 2 : // else if
  		$('.radioBoth_upd').prop('checked') == true ? 3 : // else if
  		0); 
		Members[0].PostalCode = $(".txtPostalCode_upd").val();
		Members[0].PresentAddress = $(".txtPresentAddress_upd").val();
		Members[0].PermanentAddress = $(".txtPermanentAddress_upd").val();
		Members[0].Landline = JSON.stringify(landline);
		Members[0].CellNo = JSON.stringify(cellno);
		Members[0].WhatsAppNo = $(".txtWhatsAppNo_upd").val();
		Members[0].Email = $(".txtEmail_upd").val();
		Members[0].CNIC = $(".txtCNIC_upd").val();
		Members[0].Linkdin = $(".txtLinkdin_upd").val();
		Members[0].Website = $(".txtWebsite_upd").val();
		Members[0].Facebook = $(".txtFacebook_upd").val();
		Members[0].RealEstate = $(".txtRealEstate_upd").val();
		Members[0].BusinessStartedYear = $(".ddlBusinessStartedYear_upd").val();
		Members[0].DeciplineId = $(".ddlDecipline_upd").val();
		Members[0].Location = $(".txtLocation_upd").val();
		Members[0].AgentDesignation = $(".txtAgentDesignation_upd").val();
		Members[0].WorkArea = JSON.stringify(workarea);
		Members[0].Dealership = JSON.stringify(dealership);
		Members[0].QualificationId = $(".ddlQualification_upd").val();
		Members[0].Specialization = $(".txtSpecialization_upd").val();
		Members[0].Institute = $(".txtInstitute_upd").val();
		Members[0].PassedYear = $(".ddlPassedYear_upd").val();
		Members[0].MembershipTypeId = $(".ddlMembershipType_upd").val();
		Members[0].MembershipFeeId = $(".ddlMembershipFee_upd").val();
		Members[0].JsonWorkInfo = JSON.stringify(workinfo);
		Members[0].DesignationId = $(".ddlDesignation_upd").val();
		Members[0].ParentDesignationId = $(".ddlParentDesignation_upd").val();
		Members[0].SubDesignationId = $(".ddlSubDesignation_upd").val()==null ? 0  : $('.ddlSubDesignation_upd').val();
		Members[0].StartDate = formatDate($(".txtStartDate_upd").val());
		Members[0].EndDate = formatDate($(".txtEndDate_upd").val());
		Members[0].IsMember = 0;
		Members[0].MembershipNo = 0;

		UpdateNewMember();
	});
}

function UpdateNewMember() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=UpdateNewMember",
		data: Members[0]
	});
	request.done(function(data) {
		var res = data;
		if (res > 0) {
			InitEditControls();
			GetAllMember();
			showSuccess("Successfully Updated!");
		}
	});
	request.fail(function(jqXHR, Status) {
		console.log(jqXHR.responseText);
	});
}

function InitEditControls() {
	workinfo = [];
	$('.ValidateWorkInfo_upd').remove()
	workarea = [];
	$('.ValidateWorkArea_upd').remove()
	dealership = [];
	$('.ValidateDealership_upd').remove()
	cellno = [];
	$('.ValidateCellNo_upd').remove()
	landline = [];
	$('.ValidateLandline_upd').remove()
}

function EditIsMember(selector) {
	objEditRow = $(selector).closest("tr");
	MembershipId = objEditRow.find(".hdnMembershipId").val();
	IsMember = objEditRow.find(".hdnIsMember").val();
	IsMember==0 ? BindTextToSelector('.LblReason','Select Reason To Activate Member') : BindTextToSelector('.LblReason','Select Reason To InActivate Member');
	var obj = NotificationTypeList.filter(x=>x.IsActivated==IsMember);
	FillDropDownByReference(".ddlNotificationType", obj);
	$('.txtMessage').val('');
	$('#NotificationModal').modal('show'); 
}

function UpdateMemberStatus(NotificationTypeId , Message) {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=EditIsMember",
		data: { MembershipId: MembershipId, IsMember: IsMember, NotificationTypeId : NotificationTypeId , Message : Message  }
	});
	request.done(function(data) {
		var res = data;

		if (res == 1) {
			GetAllMember();
			showSuccess("Successfully Updated!");
		}
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}
function UpdateAttachments(FileImage , FileCNIC) {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=UpdateAttachments",
		data: { MembershipId: Members[0].MembershipId, FileImage: FileImage, FileCNIC : FileCNIC }
	});
	request.done(function(data) {
		var res = data;

		if (res == 1) {
			GetAllMember();
			showSuccess("Successfully Updated!");
		}
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function editMembership(selector) {
	objEditRow = $(selector).closest("tr");
	InitEditControls();
	Members[0].MembershipId = objEditRow.find(".hdnMembershipId").val();

	$(".ddlTitle_upd").val(objEditRow.find(".hdnTitleId").val().trim());

	$(".txtFirstName_upd").val(objEditRow.find(".tdFirstName").text().trim());
	$(".txtLastName_upd").val(objEditRow.find(".tdLastName").text().trim());
	$(".txtFatherName_upd").val(objEditRow.find(".tdFatherName").text().trim());
	$(".ddlGender_upd").val(objEditRow.find(".tdGender").text().trim());
	$(".txtDob_upd").val(objEditRow.find(".tdDob").text().trim());
	$(".ddlNationality_upd").val(objEditRow.find(".hdnNationalityId").val().trim());
	$(".txtCity_upd").val(objEditRow.find(".tdCity").text().trim());
	$(".txtPostalCode_upd").val(
		objEditRow
		.find(".tdPostalCode")
		.text()
		.trim()
		);
	$(".txtPresentAddress_upd").val(
		objEditRow
		.find(".tdPresentAddress")
		.text()
		.trim()
		);
	$(".txtPermanentAddress_upd").val(
		objEditRow
		.find(".tdPermanentAddress")
		.text()
		.trim()
		);
	$(".txtLandline_upd").val(
		objEditRow
		.find(".tdLandline")
		.text()
		.trim()
		);
	$(".txtCellNo_upd").val(
		objEditRow
		.find(".tdCellNo")
		.text()
		.trim()
		);
	$(".txtWhatsAppNo_upd").val(
		objEditRow
		.find(".tdWhatsAppNo")
		.text()
		.trim()
		);
	$(".txtEmail_upd").val(
		objEditRow
		.find(".tdEmail")
		.text()
		.trim()
		);
	$(".txtCNIC_upd").val(
		objEditRow
		.find(".tdCNIC")
		.text()
		.trim()
		);
	$(".txtLinkdin_upd").val(
		objEditRow
		.find(".hdnLinkedin")
		.val()
		.trim()
		);
	$(".txtFacebook_upd").val(objEditRow.find(".hdnFacebook").val());
	$(".txtWebsite_upd").val(objEditRow.find(".hdnWebsite").val());
	$(".txtRealEstate_upd").val(objEditRow.find(".tdRealEstate").text().trim());
	$(".ddlBusinessStartedYear_upd").val(objEditRow.find(".tdBusinessStartedYear").text().trim());
	$(".txtLocation_upd").val(objEditRow.find(".tdLocation").text().trim());
	$(".txtAgentDesignation_upd").val(objEditRow.find(".tdAgentDesignation").text().trim());
	$(".ddlQualification_upd").val(objEditRow.find(".hdnQualificationId").val().trim());
	$(".ddlDecipline_upd").val(objEditRow.find(".hdnDeciplineId").val());
	$(".txtSpecialization_upd").val(objEditRow.find(".tdSpecialization").text().trim());
	$(".txtInstitute_upd").val(objEditRow.find(".tdInstitute").text().trim());
	$(".ddlPassedYear_upd").val(objEditRow.find(".tdPassedYear").text().trim());
	$(".ddlMembershipType_upd").val(objEditRow.find(".hdnMembershipTypeId").val()).change();
	$(".ddlMembershipFee_upd").val(objEditRow.find(".hdnMembershipFeeId").val());

	var rd = objEditRow.find(".hdnQualificationType").val();

  		rd == "1" ? $('.radioCertificate_upd').prop('checked',true) : // if
  		rd == "2" ? $('.radioDiploma_upd').prop('checked',true)  : // else if
  		rd == "3" ? $('.radioBoth_upd').prop('checked',true)  : // else if
  		0; 
  		QualificationHideShow_upd();
  		if(rd=="1")
  		{
  			$(".ddlCertificateSession_upd").val(objEditRow.find(".hdnCertificateSessionId").val());
  			$(".ddlCertificateYear_upd").val(objEditRow.find(".hdnCertificateYear").val());
  		}
  		else if(rd=="2")
  		{
  			$(".ddlDiplomaSession_upd").val(objEditRow.find(".hdnDiplomaSessionId").val());
  			$(".ddlDiplomaYear_upd").val(objEditRow.find(".hdnDiplomaYear").val());
  		}
  		else
  		{
  			$(".ddlCertificateSession_upd").val(objEditRow.find(".hdnCertificateSessionId").val());
  			$(".ddlCertificateYear_upd").val(objEditRow.find(".hdnCertificateYear").val());
  			$(".ddlDiplomaSession_upd").val(objEditRow.find(".hdnDiplomaSessionId").val());
  			$(".ddlDiplomaYear_upd").val(objEditRow.find(".hdnDiplomaYear").val());

  		}

  		$(".txtStartDate_upd").val(objEditRow.find(".hdnStartDate").val()== undefined ? '' : objEditRow.find(".hdnStartDate").val() );
  		$(".txtEndDate_upd").val(objEditRow.find(".hdnEndDate").val() == undefined ? '' : objEditRow.find(".hdnEndDate").val() );
  		$(".ddlParentDesignation_upd").val(objEditRow.find(".hdnParentDesignationId").val()).change();
  		$(".ddlDesignation_upd").val(objEditRow.find(".hdnDesignationId").val()).change();
  		$(".ddlSubDesignation_upd").val(objEditRow.find(".hdnSubDesignationId").val());
  		$(".AppendedRow_upd").remove();
  		BindWorkInfoEdit (objEditRow.find(".hdnJsonWorkInfo").val(),objEditRow.find(".hdnWorkArea").val(),
  			objEditRow.find(".hdnDealership").val(),objEditRow.find(".hdnCellNo").val(),objEditRow.find(".hdnLandline").val()
  			);
  	}

  	function htmlBr(Json, Key) {
  		var b = "";
  		Json = JSON.parse(Json);
  		$.each(Json, function(i, item) {
  			if (i == Json.length) {
  				b += item[Key];
  			} else {
  				b += item[Key] + "</br>";
  			}
  		});
  		return b;
  	}

  	function GetAllMember() {
  		var request = $.ajax({
  			method: "POST",
  			url: "../DatabaseFiles/Members.php?action=GetAllMember",
  			data: {}
  		});
  		request.done(function(data) {
  			onGetAllMember(data);

  		});
  		request.fail(function(jqXHR, textStatus) {
  			console.log(textStatus);
  		});
  	}
  	function onGetAllMember(data) {
  		try {
  			var res = data;
  			MembershipList = res;
    // var res = data;

    var divTbodyGoalFund = $(".MemberListing").html("");
    $("#MemberListing").tmpl(res).appendTo(divTbodyGoalFund);
} catch (Err) {
	console.log(Err);
}
}

function BindProfile(selector)
{
	try 
	{
		objEditRow = $(selector).closest('tr');

		var totalExperience = 0;
		$.each(JSON.parse(objEditRow.find('.hdnJsonWorkInfo').val()), function () {
			totalExperience += parseFloat(this.Experience);
		});
		BindTextToSelector('.tdNamePrint',  objEditRow.find('.tdFirstName').text() +' '+objEditRow.find('.tdLastName').text() );
		BindTextToSelector('.tdAcademicBackgroundPrint', objEditRow.find('.tdQualification').text()+' | '+objEditRow.find('.tdDecipline').text()+' | '+objEditRow.find('.tdSpecialization').text());
		BindTextToSelector('.tdAgentDesignation', objEditRow.find('.hdnAgentDesignation').val());
		BindTextToSelector('.tdWorkExperiencePrint', parseInt(totalExperience)+' yrs');
		BindTextToSelector('.tdCellNoPrint', htmlComma(objEditRow.find('.hdnCellNo').val(),'CellNo'));
		BindTextToSelector('.tdLandlinePrint', htmlComma(objEditRow.find('.hdnLandline').val(),'Landline'));
		BindTextToSelector('.tdEmailPrint', objEditRow.find('.tdEmail').text());
		BindTextToSelector('.tdBusinessStartedYear', objEditRow.find('.hdnBusinessStartedYear').val());
		BindTextToSelector('.tdExperience', parseInt(totalExperience)+' yrs');
		BindTextToSelector('.tdCellNo', htmlComma(objEditRow.find('.hdnCellNo').val(),'CellNo'));
		BindTextToSelector('.tdEmail', objEditRow.find('.hdnEmail').val());
		BindTextToSelector('.tdLinkedinPrint', objEditRow.find('.hdnLinkedin').val());
		BindTextToSelector('.tdFacebookPrint', objEditRow.find('.hdnFacebook').val());
		BindTextToSelector('.tdAgencyNamePrint', objEditRow.find('.tdRealEstate').text());
		BindTextToSelector('.tdWebsitePrint', objEditRow.find('.hdnWebsite').val());
		BindTextToSelector('.tdAgentDesignationPrint', objEditRow.find('.tdRealEstate').text());
		BindTextToSelector('.tdAssociatedsincePrint', objEditRow.find('.tdBusinessStartedYear').text());
		BindTextToSelector('.tdAgencylocationPrint', objEditRow.find('.tdLocation').text());
		BindTextToSelector('.tdWorkingAreaPrint', htmlComma(objEditRow.find('.hdnWorkArea').val(),'WorkArea'));
		BindTextToSelector('.tdDealershipPrint', htmlComma(objEditRow.find('.hdnDealership').val(),'Dealership'));
		BindTextToSelector('.tdCertificateCoursePrint', objEditRow.find('.hdnQualificationType').val() != 1 ? 'N/A' :  objEditRow.find('.hdnCertificateSession').val() +' | '+objEditRow.find('.hdnCertificateYear').val());
		BindTextToSelector('.tdDiplomaCoursePrint', objEditRow.find('.hdnQualificationType').val() != 2 ? 'N/A' :  objEditRow.find('.hdnDiplomaSession').val() +' | '+objEditRow.find('.hdnDiplomaYear').val());
		BindTextToSelector('.tdParentDesignationPrint', objEditRow.find('.hdnParentDesignation').val());
		BindTextToSelector('.tdMembershipNoPrint', objEditRow.find('.hdnMembershipNo').val());
		BindTextToSelector('.tdMembershipTypePrint', objEditRow.find('.tdMembershipType').text());
		BindTextToSelector('.tdSubDesignationPrint', objEditRow.find('.hdnSubDesignation').val() == 0 ? objEditRow.find('.hdnDesignation').val() : objEditRow.find('.hdnDesignation').val() +' | '+objEditRow.find('.hdnSubDesignation').val());

		$('.tdProfilePicPrint').attr('src','../upload/'+ objEditRow.find('.hdnFileImage').val());

		//var ParentDesignationId = objEditRow.find('.hdnParentDesignation').val();
		//if(ParentDesignationId==2)
		//{
		//	BindTextToSelector('.tdSubDesignation', objEditRow.find('.hdnSubDesignation').val());
		//}

	}
	catch (Err) {
		console.log(Err);
	}

}

function htmlComma( Json,Key)
{
	var index  = 0;
	var b  = '';
	Json = JSON.parse(Json);
	$.each(Json, function(i, item) {
		if((index%3==0)&& (index !=0))
		{
			b += '</br>';
			b += item[Key]+', ';
		}
		else
		{
			b += item[Key]+', ';
		}
		
		index++;
	});

	return b.slice(0,-2);
}

function CreateNewMember() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=CreateNewMember",
		data: Members[0]
	});
	request.done(function(data) {
		if (data > 0) {
			showSuccess("Successfully Created!");
			workinfo = [];
			workarea = [];
			dealership = [];
			cellno = [];
			landline = [];
			GetAllMember();
		}
	});
	request.fail(function(jqXHR, Status) {
		console.log(jqXHR.responseText);
	});
}

function DisableDonarsControl() {
	$(".ddlDonarAmount").val(0);
	$(".ddlDonarAmount").prop("disabled", true);
	$(".txtOtherAmount").prop("disabled", true);
}

function EnableDonarsControl() {
	$(".ddlDonarAmount").prop("disabled", false);
	$(".txtOtherAmount").prop("disabled", false);
}
function AllChangeFunction() {
	$(".ddlMembershipType").change(function() {
		var MembershipTypeId = $(this).val();
		var obj = MembershipFeeList.filter(
			x => x.MembershipTypeId == MembershipTypeId
			);
		onGetAllMembershipFee(obj);
		if (MembershipTypeId == 7) {
			EnableDonarsControl();
		} else {
			DisableDonarsControl();
		}
	});

	$(".ddlMembershipType_upd").change(function() {
		var MembershipTypeId = $(this).val();
		var obj = MembershipFeeList.filter(
			x => x.MembershipTypeId == MembershipTypeId
			);
		onGetAllMembershipFee(obj);
		if (MembershipTypeId == 7) {
			EnableDonarsControl();
		} else {
			DisableDonarsControl();
		}
	});

	$(".ddlParentDesignation").change(function() {
		var ParentDesignationId = $(this).val();
		var obj = DesignationList.filter(
			x => x.ParentDesignationId == ParentDesignationId
			);
		onGetAllDesignation(obj);
		var obj = SubDesignationList.filter(
			x => x.ParentDesignationId == ParentDesignationId
			);
		onGetAllSubDesignation(obj);
	});
	$(".ddlParentDesignation_upd").change(function() {
		var ParentDesignationId = $(this).val();
		var obj = DesignationList.filter(
			x => x.ParentDesignationId == ParentDesignationId
			);
		onGetAllDesignation(obj);
		var obj = SubDesignationList.filter(
			x => x.ParentDesignationId == ParentDesignationId
			);
		onGetAllSubDesignation(obj);
	});
}
function GetAllSubDesignation() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllSubDesignation",
		data: {}
	});
	request.done(function(data) {
		var res = data;
		SubDesignationList = res;

    //onGetAllSubDesignation(data);
});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllSubDesignation(data) {
	try {
		/*  var res = data;*/
		FillDropDownByReference(".ddlSubDesignation", data);
		FillDropDownByReference(".ddlSubDesignation_upd", data);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllNationality() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllNationality",
		data: {}
	});
	request.done(function(data) {
		onGetAllNationality(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllNationality(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlNationality", res);
		FillDropDownByReference(".ddlNationality_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllCertificateSession() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllCertificateSession",
		data: {}
	});
	request.done(function(data) {
		onGetAllCertificateSession(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllCertificateSession(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlCertificateSession", res);
		FillDropDownByReference(".ddlCertificateSession_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllDiplomaSession() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllDiplomaSession",
		data: {}
	});
	request.done(function(data) {
		onGetAllDiplomaSession(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllDiplomaSession(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlDiplomaSession", res);
		FillDropDownByReference(".ddlDiplomaSession_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllDecipline() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllDecipline",
		data: {}
	});
	request.done(function(data) {
		onGetAllDecipline(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllDecipline(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlDecipline", res);
		FillDropDownByReference(".ddlDecipline_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllMembershipFee() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllMembershipFee",
		data: {}
	});
	request.done(function(data) {
		var res = data;

		MembershipFeeList = res;
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllMembershipFee(data) {
	try {
		/*  var res = data;*/
		
		FillDropDownByReference(".ddlMembershipFee", data);
		FillDropDownByReference(".ddlMembershipFee_upd", data);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllDesignation() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllDesignation",
		data: {}
	});
	request.done(function(data) {
		var res = data;
		DesignationList = res;
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllDesignation(data) {
	try {
		/*  var res = data;*/

		FillDropDownByReference(".ddlDesignation", data);
		FillDropDownByReference(".ddlDesignation_upd", data);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllMembershipType() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllMembershipType",
		data: {}
	});
	request.done(function(data) {
		onGetAllMembershipType(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllMembershipType(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlMembershipType", res);
		FillDropDownByReference(".ddlMembershipType_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllParentDesignation() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllParentDesignation",
		data: {}
	});
	request.done(function(data) {
		onGetAllParentDesignation(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllParentDesignation(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlParentDesignation", res);
		FillDropDownByReference(".ddlParentDesignation_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllTitle() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllTitle",
		data: {}
	});
	request.done(function(data) {
		onGetAllTitle(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllTitle(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlTitle", res);
		FillDropDownByReference(".ddlTitle_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}
function GetAllNotificationType() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllNotificationType",
		data: {}
	});
	request.done(function(data) {
		onGetAllNotificationType(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllNotificationType(data) {
	try {
		/*  var res = data;*/
		var res = data;
		NotificationTypeList = res;
		//FillDropDownByReference(".ddlNotificationType", res);
		//FillDropDownByReference(".ddlNotificationType_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}
function GetAllYears() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllYears",
		data: {}
	});
	request.done(function(data) {
		onGetAllYears(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllYears(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlBusinessStartedYear", res);
		FillDropDownByReference(".ddlBusinessStartedYear_upd", res);
		FillDropDownByReference(".ddlPassedYear", res);
		FillDropDownByReference(".ddlPassedYear_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function GetAllQualification() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllQualification",
		data: {}
	});
	request.done(function(data) {
		onGetAllQualification(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllQualification(data) {
	try {
		/*  var res = data;*/
		var res = data;
		FillDropDownByReference(".ddlQualification", res);
		FillDropDownByReference(".ddlQualification_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}

function AddRowControlToJSON() {
	$(".Validate").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var Organization = $(this)
    .find(".txtOrganization")
    .val();
    var Designation = $(this)
    .find(".txtDesignation")
    .val();
    var Experience = $(this)
    .find(".ddlWorkExperience")
    .val();

    workinfo.push({
    	Organization: Organization,
    	Designation: Designation,
    	Experience: Experience
    });
});

	$(".ValidateWorkArea").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var WorkArea = $(this)
    .find(".txtWorkArea")
    .val();

    workarea.push({ WorkArea: WorkArea });
});

	$(".ValidateDealership").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var Dealership = $(this)
    .find(".txtDealership")
    .val();
    dealership.push({ Dealership: Dealership });
});
	$(".ValidateCellNo").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var CellNo = $(this)
    .find(".txtCellNo")
    .val();
    cellno.push({ CellNo: CellNo });
});
	$(".ValidateLandline").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var Landline = $(this)
    .find(".txtLandline")
    .val();
    landline.push({ Landline: Landline });
});
}
function AddRowControlToJSON_upd() {
	$(".AppendedRow_upd").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var Organization = $(this)
    .find(".txtOrganization_upd")
    .val();
    var Designation = $(this)
    .find(".txtDesignation_upd")
    .val();
    var Experience = $(this)
    .find(".ddlWorkExperience_upd")
    .val();

    workinfo.push({
    	Organization: Organization,
    	Designation: Designation,
    	Experience: Experience
    });
});
	$(".ValidateWorkArea_upd").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var WorkArea = $(this)
    .find(".txtWorkArea_upd")
    .val();

    workarea.push({ WorkArea: WorkArea });
});

	$(".ValidateDealership_upd").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var Dealership = $(this)
    .find(".txtDealership_upd")
    .val();
    dealership.push({ Dealership: Dealership });
});

	$(".ValidateCellNo_upd").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var CellNo = $(this)
    .find(".txtCellNo_upd")
    .val();
    cellno.push({ CellNo: CellNo });
});
	$(".ValidateLandline_upd").each(function() {
    //console.log($(this).find('.txtDesignation').val());
    var Landline = $(this)
    .find(".txtLandline_upd")
    .val();
    landline.push({ Landline: Landline });
});
}

function AppendAddWorkRow(obj) {
	if (!validateForm(".Validate")) return;





	var rowHtml = "<div class='row AppendedRow Validate'>";
	rowHtml += "<div class='col-md-4'>";
	rowHtml += "<div class='form-group'>";
	rowHtml += "<label for='txtQualification'>Organization</label>";
	rowHtml +=
	"<input type='text' class='form-control txtOrganization' id='txtOrganization' placeholder='Enter organization'>";
	rowHtml += "</div>";
	rowHtml += "</div>";
	rowHtml += "<div class='col-md-4'>";
	rowHtml += "<div class='form-group'>";
	rowHtml += "<label for='txtDesignation'>Designation</label>";
	rowHtml +=
	"<input type='text' class='form-control txtDesignation' id='txtDesignation' placeholder='Enter designation'>";
	rowHtml += "</div>";
	rowHtml += "</div>";
	rowHtml += "<div class='col-md-2'>";
	rowHtml += "<label for='ddlWorkExperience'>Experience</label>";
	rowHtml += "<select class='form-control ddlWorkExperience' >";
	rowHtml += "<option value='0'>--Select--</option>";
	rowHtml += "<option value='1'>1</option>";
	rowHtml += "<option value='2'>2</option>";
	rowHtml += "<option value='3'>3</option>";
	rowHtml += "<option value='4'>4</option>";
	rowHtml += "<option value='5'>5</option>";
	rowHtml += "<option value='6'>6</option>";
	rowHtml += "<option value='6'>6</option>";
	rowHtml += "<option value='7'>7</option>";
	rowHtml += "<option value='8'>8</option>";
	rowHtml += "<option value='9'>9</option>";
	rowHtml += "<option value='10'>10</option>";
	rowHtml += "<option value='11'>11</option>";
	rowHtml += "<option value='12'>12</option>";
	rowHtml += "<option value='13'>13</option>";
	rowHtml += "<option value='14'>14</option>";
	rowHtml += "<option value='15'>15</option>";
	rowHtml += "<option value='16'>16</option>";
	rowHtml += "<option value='17'>17</option>";
	rowHtml += "<option value='18'>18</option>";
	rowHtml += "<option value='19'>19</option>";
	rowHtml += "<option value='20'>20</option>";
	rowHtml += "<option value='21'>21</option>";
	rowHtml += "<option value='22'>22</option>";
	rowHtml += "<option value='23'>23</option>";
	rowHtml += "<option value='24'>24</option>";
	rowHtml += "<option value='25'>25</option>";
	rowHtml += "<option value='26'>26</option>";
	rowHtml += "<option value='27'>27</option>";
	rowHtml += "<option value='28'>28</option>";
	rowHtml += "<option value='29'>29</option>";
	rowHtml += "<option value='30'>30</option>";
	rowHtml += "</select>";
	rowHtml += "</div>";
	rowHtml += "<div class='col-md-1'>";
	rowHtml +=
	"<button type='button' class='btn btn-danger btn-sm btnRemoveWork' onclick='RemoveWorkRow(this)'><i class='fa fa-minus-square-o'></i> Remove</button>";
	rowHtml += "</div>";
	rowHtml += "</div>";
	rowHtml += "</div>";

	$(".Validate:last").after($(rowHtml));
}

function AppendAddWorkRow_upd(obj) {
	if (!validateForm(".AppendedRow_upd")) return;

	var rowHtml = "<div class='row AppendedRow_upd Validate_upd'>";
	rowHtml += "<div class='col-md-4'>";
	rowHtml += "<div class='form-group'>";
	rowHtml += "<label for='txtQualification_upd'>Organization</label>";
	rowHtml +=
	"<input type='text' class='form-control txtOrganization_upd' id='txtOrganization_upd' placeholder='Enter organization'>";
	rowHtml += "</div>";
	rowHtml += "</div>";
	rowHtml += "<div class='col-md-4'>";
	rowHtml += "<div class='form-group'>";
	rowHtml += "<label for='txtDesignation_upd'>Designation</label>";
	rowHtml +=
	"<input type='text' class='form-control txtDesignation_upd' id='txtDesignation_upd' placeholder='Enter designation'>";
	rowHtml += "</div>";
	rowHtml += "</div>";
	rowHtml += "<div class='col-md-2'>";
	rowHtml += "<label for='ddlWorkExperience_upd'>Experience</label>";
	rowHtml += "<select class='form-control ddlWorkExperience_upd' >";
	rowHtml += "<option value='0'>--Select--</option>";
	rowHtml += "<option value='1'>1</option>";
	rowHtml += "<option value='2'>2</option>";
	rowHtml += "<option value='3'>3</option>";
	rowHtml += "<option value='4'>4</option>";
	rowHtml += "<option value='5'>5</option>";
	rowHtml += "<option value='6'>6</option>";
	rowHtml += "<option value='6'>6</option>";
	rowHtml += "<option value='7'>7</option>";
	rowHtml += "<option value='8'>8</option>";
	rowHtml += "<option value='9'>9</option>";
	rowHtml += "<option value='10'>10</option>";
	rowHtml += "<option value='11'>11</option>";
	rowHtml += "<option value='12'>12</option>";
	rowHtml += "<option value='13'>13</option>";
	rowHtml += "<option value='14'>14</option>";
	rowHtml += "<option value='15'>15</option>";
	rowHtml += "<option value='16'>16</option>";
	rowHtml += "<option value='17'>17</option>";
	rowHtml += "<option value='18'>18</option>";
	rowHtml += "<option value='19'>19</option>";
	rowHtml += "<option value='20'>20</option>";
	rowHtml += "<option value='21'>21</option>";
	rowHtml += "<option value='22'>22</option>";
	rowHtml += "<option value='23'>23</option>";
	rowHtml += "<option value='24'>24</option>";
	rowHtml += "<option value='25'>25</option>";
	rowHtml += "<option value='26'>26</option>";
	rowHtml += "<option value='27'>27</option>";
	rowHtml += "<option value='28'>28</option>";
	rowHtml += "<option value='29'>29</option>";
	rowHtml += "<option value='30'>30</option>";
	rowHtml += "</select>";
	rowHtml += "</div>";
	rowHtml += "<div class='col-md-1'>";
	rowHtml +=
	"<button type='button' class='btn btn-danger btn-sm btnRemoveWork_upd' onclick='RemoveWorkRow_upd(this)'><i class='fa fa-minus-square-o'></i> Remove</button>";
	rowHtml += "</div>";
	rowHtml += "</div>";
	rowHtml += "</div>";

	$(".Validate_upd:last").after($(rowHtml));
}

function RemoveWorkRow(obj) {
	$(obj)
	.closest(".AppendedRow")
	.remove();
}

function RemoveWorkRow_upd(obj) {
	$(obj)
	.closest(".AppendedRow_upd")
	.remove();
}

function RemoveDealership(obj) {
	$(obj)
	.closest(".AppendedRowDealership")
	.remove();
}

function RemoveWorkArea(obj) {
	$(obj)
	.closest(".AppendedRowWorkArea")
	.remove();
}

function RemoveDealership_upd(obj) {
	$(obj)
	.closest(".AppendAfterDealership_upd")
	.remove();
}

function RemoveWorkArea_upd(obj) {
	$(obj)
	.closest(".AppendAfterWorkArea_upd")
	.remove();
}

function RemoveCellNo(obj) {
	$(obj)
	.closest(".AppendedRowCellNo")
	.remove();
}
function RemoveCellNo_upd(obj) {
	$(obj).closest(".AppendAfterCellNo_upd").remove();
}

function RemoveLandline(obj) {
	$(obj)
	.closest(".AppendedRowLandline")
	.remove();
}
function RemoveLandline_upd(obj) {
	$(obj)
	.closest(".AppendAfterLandline_upd")
	.remove();
}
function AppendAddWorkArea(selector) {
	if (!validateForm(".ValidateWorkArea")) return;
	var html = "<div class='col-md-4 AppendedRowWorkArea  ValidateWorkArea'>";
	html += "<div class='form-group'>";
	html += "<label for='txtWorkArea'>Work Area</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddWorkArea(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveWorkArea(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtWorkArea' id='txtWorkArea' placeholder='Enter work area'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateWorkArea:last").after($(html));
}

function AppendAddWorkArea_upd(selector) {
	if (!validateForm(".ValidateWorkArea_upd")) return;
	var html =
	"<div class='col-md-4 AppendedRowWorkArea_upd AppendAfterWorkArea_upd  ValidateWorkArea_upd'>";
	html += "<div class='form-group'>";
	html += "<label for='txtWorkArea'>Working Area</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddWorkArea_upd(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveWorkArea_upd(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtWorkArea_upd' id='txtWorkArea_upd' placeholder='Enter working area'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateWorkArea_upd:last").after($(html));
}

function AppendAddCellNo(selector) {
	if (!validateForm(".ValidateCellNo")) return;
	var html = "<div class='col-md-3 AppendedRowCellNo ValidateCellNo'>";
	html += "<div class='form-group'>";
	html += "<label for='txtCellNo'>Cell #</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddCellNo(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveCellNo(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtCellNo' id='txtCellNo' placeholder='Enter cell no'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateCellNo:last").after($(html));
}

function AppendAddCellNo_upd(selector) {
	if (!validateForm(".ValidateCellNo_upd")) return;
	var html = "<div class='col-md-3 AppendedRowCellNo_upd AppendAfterCellNo_upd  ValidateCellNo_upd'>";
	html += "<div class='form-group'>";
	html += "<label for='txtCellNo'>CellNo</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddCellNo_upd(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveCellNo_upd(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtCellNo' id='txtCellNo' placeholder='Enter cell no'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateCellNo_upd:last").after($(html));
}
function AppendAddDealership(selector) {
	if (!validateForm(".ValidateDealership")) return;
	var html = "<div class='col-md-4 AppendedRowDealership ValidateDealership'>";
	html += "<div class='form-group'>";
	html += "<label for='txtDealership'>Authorized Dealership</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddDealership(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveDealership(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtDealership' id='txtDealership' placeholder='Enter authorized dealership'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateDealership:last").after($(html));
}

function AppendAddDealership_upd(selector) {
	if (!validateForm(".ValidateDealership_upd")) return;
	var html =
	"<div class='col-md-4 AppendedRowDealership_upd AppendAfterDealership_upd  ValidateDealership_upd'>";
	html += "<div class='form-group'>";
	html += "<label for='txtDealership_upd'>Authorized Dealership</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddDealership_upd(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveDealership_upd(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtDealership_upd' id='txtDealership_upd' placeholder='Enter authorized dealership'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateDealership_upd:last").after($(html));
}

function AppendAddLandline(selector) {
	if (!validateForm(".ValidateLandline")) return;
	var html = "<div class='col-md-3 AppendedRowLandline ValidateLandline'>";
	html += "<div class='form-group'>";
	html += "<label for='txtLandline'>Landline</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddLandline(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveLandline(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtLandline' id='txtLandline' placeholder='Enter landline no'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateLandline:last").after($(html));
}

function AppendAddLandline_upd(selector) {
	if (!validateForm(".ValidateLandline_upd")) return;
	var html =
	"<div class='col-md-3 AppendedRowLandline_upd AppendAfterLandline_upd  ValidateLandline_upd'>";
	html += "<div class='form-group'>";
	html += "<label for='txtLandline'>Landline</label>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='AppendAddLandline_upd(this)'><i class='fa fa-plus-square'></i></a>";
	html +=
	" &nbsp; <a href='#' style='color:black' onclick='RemoveLandline_upd(this)'><i class='fa fa-minus-square'></i></a>";
	html +=
	"<input type='text' class='form-control txtLandline' id='txtLandline' placeholder='Enter landline no'>";
	html += "</div>";
	html += "</div>";

	$(".ValidateLandline_upd:last").after($(html));
}

function BindWorkInfoEdit(Json, WorkArea, Dealership, CellNo, Landline) {
	var i = 0;
	$.each(JSON.parse(Json), function(key, val) {
		var rowHtml = '';
		if(i==0)
		{
			rowHtml += "<div class='row AppendedRow_upd Validate_upd'>";
			rowHtml += "<div class='col-md-4'>";
			rowHtml += "<div class='form-group'>";
			rowHtml += "<label for='txtOrganization_upd'>Organization</label>";
			rowHtml +=
			"<input type='text' class='form-control txtOrganization_upd' value='" +
			val.Organization +
			"' id='txtOrganization_upd' placeholder='Enter organization'>";
			rowHtml += "</div>";
			rowHtml += "</div>";
			rowHtml += "<div class='col-md-4'>";
			rowHtml += "<div class='form-group'>";
			rowHtml += "<label for='txtDesignation_upd'>Designation</label>";
			rowHtml +=
			"<input type='text' class='form-control txtDesignation_upd' id='txtDesignation_upd' value='" +
			val.Designation +
			"' placeholder='Enter designation'>";
			rowHtml += "</div>";
			rowHtml += "</div>";
			rowHtml += "<div class='col-md-2'>";
			rowHtml += "<label for='ddlWorkExperience_upd'>Experience</label>";
			rowHtml += "<select class='form-control ddlWorkExperience_upd' >";
			rowHtml += "<option value='0'>--Select--</option>";
			rowHtml += "<option value='1'>1</option>";
			rowHtml += "<option value='2'>2</option>";
			rowHtml += "<option value='3'>3</option>";
			rowHtml += "<option value='4'>4</option>";
			rowHtml += "<option value='5'>5</option>";
			rowHtml += "<option value='6'>6</option>";
			rowHtml += "<option value='6'>6</option>";
			rowHtml += "<option value='7'>7</option>";
			rowHtml += "<option value='8'>8</option>";
			rowHtml += "<option value='9'>9</option>";
			rowHtml += "<option value='10'>10</option>";
			rowHtml += "<option value='11'>11</option>";
			rowHtml += "<option value='12'>12</option>";
			rowHtml += "<option value='13'>13</option>";
			rowHtml += "<option value='14'>14</option>";
			rowHtml += "<option value='15'>15</option>";
			rowHtml += "<option value='16'>16</option>";
			rowHtml += "<option value='17'>17</option>";
			rowHtml += "<option value='18'>18</option>";
			rowHtml += "<option value='19'>19</option>";
			rowHtml += "<option value='20'>20</option>";
			rowHtml += "<option value='21'>21</option>";
			rowHtml += "<option value='22'>22</option>";
			rowHtml += "<option value='23'>23</option>";
			rowHtml += "<option value='24'>24</option>";
			rowHtml += "<option value='25'>25</option>";
			rowHtml += "<option value='26'>26</option>";
			rowHtml += "<option value='27'>27</option>";
			rowHtml += "<option value='28'>28</option>";
			rowHtml += "<option value='29'>29</option>";
			rowHtml += "<option value='30'>30</option>";
			rowHtml += "</select>";
			rowHtml += "</div>";
			rowHtml += "<div class='col-md-1'>";
			rowHtml +="<label></label>";
			rowHtml +=
			"<button type='button' class='btn btn-primary btn-sm btnAddWork' onclick='AppendAddWorkRow_upd(this)'><i class='fa fa-plus-square-o'></i> Add</button>";
			rowHtml += "</div>";
			rowHtml += "</div>";
			rowHtml += "</div>";
		}

		else  {
			rowHtml += "<div class='row AppendedRow_upd Validate_upd'>";
			rowHtml += "<div class='col-md-4'>";
			rowHtml += "<div class='form-group'>";
			rowHtml += "<label for='txtOrganization_upd'>Organization</label>";
			rowHtml +=
			"<input type='text' class='form-control txtOrganization_upd' value='" +
			val.Organization +
			"' id='txtOrganization_upd' placeholder='Enter organization'>";
			rowHtml += "</div>";
			rowHtml += "</div>";
			rowHtml += "<div class='col-md-4'>";
			rowHtml += "<div class='form-group'>";
			rowHtml += "<label for='txtDesignation_upd'>Designation</label>";
			rowHtml +=
			"<input type='text' class='form-control txtDesignation_upd' id='txtDesignation_upd' value='" +
			val.Designation +
			"' placeholder='Enter designation'>";
			rowHtml += "</div>";
			rowHtml += "</div>";
			rowHtml += "<div class='col-md-2'>";
			rowHtml += "<label for='ddlWorkExperience_upd'>Experience</label>";
			rowHtml += "<select class='form-control ddlWorkExperience_upd' >";
			rowHtml += "<option value='0'>--Select--</option>";
			rowHtml += "<option value='1'>1</option>";
			rowHtml += "<option value='2'>2</option>";
			rowHtml += "<option value='3'>3</option>";
			rowHtml += "<option value='4'>4</option>";
			rowHtml += "<option value='5'>5</option>";
			rowHtml += "<option value='6'>6</option>";
			rowHtml += "<option value='6'>6</option>";
			rowHtml += "<option value='7'>7</option>";
			rowHtml += "<option value='8'>8</option>";
			rowHtml += "<option value='9'>9</option>";
			rowHtml += "<option value='10'>10</option>";
			rowHtml += "<option value='11'>11</option>";
			rowHtml += "<option value='12'>12</option>";
			rowHtml += "<option value='13'>13</option>";
			rowHtml += "<option value='14'>14</option>";
			rowHtml += "<option value='15'>15</option>";
			rowHtml += "<option value='16'>16</option>";
			rowHtml += "<option value='17'>17</option>";
			rowHtml += "<option value='18'>18</option>";
			rowHtml += "<option value='19'>19</option>";
			rowHtml += "<option value='20'>20</option>";
			rowHtml += "<option value='21'>21</option>";
			rowHtml += "<option value='22'>22</option>";
			rowHtml += "<option value='23'>23</option>";
			rowHtml += "<option value='24'>24</option>";
			rowHtml += "<option value='25'>25</option>";
			rowHtml += "<option value='26'>26</option>";
			rowHtml += "<option value='27'>27</option>";
			rowHtml += "<option value='28'>28</option>";
			rowHtml += "<option value='29'>29</option>";
			rowHtml += "<option value='30'>30</option>";
			rowHtml += "</select>";
			rowHtml += "</div>";
			rowHtml += "<div class='col-md-1'>";
			rowHtml +="<label></label>";
			rowHtml +=
			"<button type='button' class='btn btn-danger btn-sm btnRemoveWork' onclick='RemoveWorkRow_upd(this)'><i class='fa fa-minus-square-o'></i> Remove</button>";
			rowHtml += "</div>";
			rowHtml += "</div>";
			rowHtml += "</div>";

			
		}
		
		$(".Validate_upd:last").after($(rowHtml));
		$(".ddlWorkExperience_upd").eq(i).val(val.Experience);
		i++;
	});

i = 0;
$.each(JSON.parse(WorkArea), function(key, val) {
	var rowHtml = "";
	if(i==0)
	{
		rowHtml +="<div class='col-md-4 AppendAfterWorkArea_upd ValidateWorkArea_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtWorkArea_upd'>Working Area</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddWorkArea_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtWorkArea_upd' id='txtWorkArea_upd' placeholder='Enter working area' value='"+val.WorkArea+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	else
	{
		rowHtml +="<div class='col-md-4 AppendAfterWorkArea_upd ValidateWorkArea_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtWorkArea_upd'>Working Area</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddWorkArea_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='RemoveWorkArea_upd(this)'><i class='fa fa-minus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtWorkArea_upd' id='txtWorkArea_upd' placeholder='Enter working area' value='"+val.WorkArea+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	$(".AppendAfterWorkArea_upd:last").after($(rowHtml));
	i++;
});

var j=0;
$.each(JSON.parse(Dealership), function(key, val) {
	var rowHtml = "";
	if(j==0)
	{
		rowHtml +="<div class='col-md-4 AppendAfterDealership_upd ValidateDealership_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtDealership_upd'>Authorize Dealership</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddDealership_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtDealership_upd' id='txtDealership_upd' placeholder='Enter authorized dealership' value='"+val.Dealership+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	else
	{
		rowHtml +="<div class='col-md-4 AppendAfterDealership_upd ValidateDealership_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtDealership_upd'>Authorize Dealership</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddDealership_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='RemoveDealership_upd(this)'><i class='fa fa-minus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtDealership_upd' id='txtDealership_upd' placeholder='Enter authorized dealership' value='"+val.Dealership+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	$(".AppendAfterDealership_upd:last").after($(rowHtml));
	j++;
});

var k=0; $.each(JSON.parse(CellNo), function(key, val) {
	var rowHtml = "";
	if(k==0)
	{
		rowHtml +="<div class='col-md-3 AppendAfterCellNo_upd ValidateCellNo_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtCellNo_upd'>Cell #</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddCellNo_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtCellNo_upd ' id='txtCellNo_upd' placeholder='Enter cell no' value='"+val.CellNo+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	else
	{
		rowHtml +="<div class='col-md-3 AppendAfterCellNo_upd ValidateCellNo_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtCellNo_upd'>Cell #</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddCellNo_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='RemoveCellNo_upd(this)'><i class='fa fa-minus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtCellNo_upd' id='txtCellNo_upd' placeholder='Enter cell no' value='"+val.CellNo+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	$(".AppendAfterCellNo_upd:last").after($(rowHtml));
	k++;
});



var l=0; $.each(JSON.parse(Landline), function(key, val) {
	var rowHtml = "";
	if(l==0)
	{
		rowHtml +="<div class='col-md-3 AppendAfterLandline_upd ValidateLandline_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtLandline_upd'>Landline</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddLandline_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtLandline_upd' id='txtLandline_upd' placeholder='Enter landline' value='"+val.Landline+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	else
	{
		rowHtml +="<div class='col-md-3 AppendAfterLandline_upd ValidateLandline_upd'>";
		rowHtml +="<div class='form-group'>";
		rowHtml +="<label for='txtLandline_upd'>Landline</label>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='AppendAddLandline_upd(this)'><i class='fa fa-plus-square'></i></a>";
		rowHtml +="&nbsp; <a href='#' style='color:black' onclick='RemoveLandline_upd(this)'><i class='fa fa-minus-square'></i></a>";
		rowHtml +="<input type='text' class='form-control txtLandline_upd' id='txtLandline_upd' placeholder='Enter landline' value='"+val.Landline+"'>";
		rowHtml +="</div>";
		rowHtml +="</div>";
	}
	$(".AppendAfterLandline_upd:last").after($(rowHtml));
	l++;
});

}
function QualificationHideShow() {

	if($('.radioDiploma').prop('checked')==true)
	{
		$('.RowDiploma').css('display','block');
		$('.RowCertificate').css('display','none');
	}
	else if($('.radioCertificate').prop('checked')==true)
	{
		$('.RowDiploma').css('display','none');
		$('.RowCertificate').css('display','block');
	}
	else
	{
		$('.RowDiploma').css('display','block');
		$('.RowCertificate').css('display','block');
	}
}

function QualificationHideShow_upd() {

	if($('.radioDiploma_upd').prop('checked')==true)
	{
		$('.RowDiploma_upd').css('display','block');
		$('.RowCertificate_upd').css('display','none');
	}
	else if($('.radioCertificate_upd').prop('checked')==true)
	{
		$('.RowDiploma_upd').css('display','none');
		$('.RowCertificate_upd').css('display','block');
	}
	else
	{
		$('.RowDiploma_upd').css('display','block');
		$('.RowCertificate_upd').css('display','block');
	}
}

function MembershipValidation() {

	if($('.radioDiploma').prop('checked')==true)
	{
		$('.ddlCertificateSession').addClass("notrequired");
		$('.ddlCertificateYear').addClass("notrequired");
	}
	else if($('.radioCertificate').prop('checked')==true)
	{
		$('.ddlDiplomaSession').addClass("notrequired");
		$('.ddlDiplomaYear').addClass("notrequired");
	}
	if($('.ddlParentDesignation').val()==1)
	{
		$('.ddlSubDesignation').addClass("notrequired");
	}


}


function MembershipValidation_upd() {

	if($('.radioDiploma_upd').prop('checked')==true)
	{
		$('.ddlCertificateSession_upd').addClass("notrequired");
		$('.ddlCertificateYear_upd').addClass("notrequired");
	}
	else if($('.radioCertificate_upd').prop('checked')==true)
	{
		$('.ddlDiplomaSession_upd').addClass("notrequired");
		$('.ddlDiplomaYear_upd').addClass("notrequired");
	}
	if($('.ddlParentDesignation_upd').val()==1)
	{
		$('.ddlSubDesignation_upd').addClass("notrequired");
	}


}