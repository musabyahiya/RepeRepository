GetAllNationality();
GetAllYears();
GetAllDesignation();
GetAllQualification();
AllClickFunction();
GetAllMembershipType();
AllChangeFunction();
GetAllMembershipFee();
DisableDonarsControl();
GetAllMember();
QualificationHideShow();
GetAllParentDesignation();
GetAllCertificateSession();
GetAllDiplomaSession();
GetAllDecipline();
GetAllTitle();
GetAllCountry();
var objEditRow;
var MembershipId;
var MembershipFeeList;
validateNumeric();
var workinfo = [];
var workarea= [];
var dealership= [];
var cellno= [];
var landline= [];
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
	CountryId : 0,
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
function GetAllCertificateSession() {
	var request = $.ajax({
		method: "POST",
		url: "admin/DatabaseFiles/Members.php?action=GetAllCertificateSession",
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
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference(".ddlCertificateSession", res);
		FillDropDownByReference(".ddlCertificateSession_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}
function GetAllTitle() {
	var request = $.ajax({
		method: "POST",
		url: "admin/DatabaseFiles/Members.php?action=GetAllTitle",
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
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference(".ddlTitle", res);
		FillDropDownByReference(".ddlTitle_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}
function GetAllDiplomaSession() {
	var request = $.ajax({
		method: "POST",
		url: "admin/DatabaseFiles/Members.php?action=GetAllDiplomaSession",
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
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference(".ddlDiplomaSession", res);
		FillDropDownByReference(".ddlDiplomaSession_upd", res);
	} catch (Err) {
		console.log(Err);
	}
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
function GetAllDesignation()
{
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Members.php?action=GetAllDesignation",
		data: {}
	});
	request.done(function(data) {

		var res = JSON.parse(data);
		DesignationList=res;

	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllDesignation(data)
{
	try {
		/*  var res = JSON.parse(data);*/
		var res = data;
		
		FillDropDownByReference('.ddlDesignation',res);
		FillDropDownByReference('.ddlDesignation_upd',res);
	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllParentDesignation()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Members.php?action=GetAllParentDesignation",
		data: {}
	});
	request.done(function(data) {

		onGetAllParentDesignation(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllParentDesignation(data)
{ 
	try {
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference('.ddlParentDesignation',res);
		FillDropDownByReference('.ddlParentDesignation_upd',res);

	}

	catch (Err) {
		console.log(Err);
	}
}
function AllClickFunction()
{
	

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
                frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
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
	$('.btnSaveChanges').click(function () {
		MembershipValidation();
		
		if (!validateForm('.FrmMembership'))
			return;
		if (!validateForm('.Validate'))
			return;

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
		Members[0].CountryId = $(".ddlCountry").val();
		Members[0].PassedYear = $(".ddlPassedYear").val();
		Members[0].MembershipTypeId = $(".ddlMembershipType").val();
		Members[0].MembershipFeeId = $(".ddlMembershipFee").val();
		Members[0].JsonWorkInfo = JSON.stringify(workinfo);
		Members[0].DesignationId = 0;
		Members[0].StartDate = null;
		Members[0].EndDate = null;
		Members[0].FileImage = FileUpload(".txtFileImage").trim();
		Members[0].FileCNIC = FileUpload(".txtFileCNIC").trim();
		Members[0].IsMember = 0;
		Members[0].MembershipNo = 0;
		Members[0].ParentDesignationId = 0;
		Members[0].SubDesignationId = 0;

		if (!isValidEmailAddress(Members[0].Email)) {
			showError("Email is Incorrect!");
			return;
		}

		CreateNewMember();

	});

	$('.btnUpdateChanges').click(function () {
		
		if (!validateForm('.FrmMembership_upd'))
			return;
		if (!validateForm('.Validate_upd'))
			return;


		AddRowControlToJSON_upd();
		Members[0].Title = $('.ddlTitle_upd').val();
		Members[0].FirstName = $('.txtFirstName_upd').val();
		Members[0].MiddleName = $('.txtMiddleName_upd').val();
		Members[0].LastName = $('.txtLastName_upd').val();
		Members[0].Gender = $('.ddlGender_upd').val();
		Members[0].Dob = formatDate($('.txtDob').val());
		Members[0].NationalityId = $('.ddlNationality_upd').val();
		Members[0].City = $('.txtCity_upd').val();
		Members[0].PostalCode = $('.txtPostalCode_upd').val();
		Members[0].PresentAddress = $('.txtPresentAddress_upd').val();
		Members[0].PermanentAddress = $('.txtPermanentAddress_upd').val();
		Members[0].Landline = $('.txtLandline_upd').val();
		Members[0].CellNo = $('.txtCellNo_upd').val();
		Members[0].WhatsAppNo = $('.txtWhatsAppNo_upd').val();
		Members[0].Email = $('.txtEmail_upd').val();
		Members[0].RealEstate = $('.txtRealEstate_upd').val();
		Members[0].BusinessStartedYear = $('.ddlBusinessStartedYear_upd').val();
		Members[0].Location = $('.txtLocation_upd').val();
		Members[0].QualificationId = $('.ddlQualification_upd').val();
		Members[0].Decipline = $('.txtDecipline_upd').val();
		Members[0].Specialization = $('.txtSpecialization_upd').val();
		Members[0].Institute = $('.txtInstitute_upd').val();
		Members[0].PassedYear = $('.ddlPassedYear_upd').val();
		Members[0].MembershipTypeId = $('.ddlMembershipType_upd').val();
		Members[0].MembershipFeeId = $('.ddlMembershipFee_upd').val();
		Members[0].JsonWorkInfo = JSON.stringify(workinfo);
		Members[0].FileImage =  FileUpload('.txtFileImage_upd');
		Members[0].FileCNIC = FileUpload('.txtFileCNIC_upd');

		UpdateNewMember();

	});

	$('.btnSendMail').click(function () {
		
		if (!validateForm('.FrmEmail'))
			return;
		var Name = $('.txtName').val();
		var Email = $('.txtEmail').val();
		var CellNo = $('.txtCellNo').val();
		var Message = $('.txtMessage').val();


		SendEmail(Name,Email,CellNo,Message)

	});

	

}

function GetAllDecipline() {
	var request = $.ajax({
		method: "POST",
		url: "admin/DatabaseFiles/Members.php?action=GetAllDecipline",
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
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference(".ddlDecipline", res);
		FillDropDownByReference(".ddlDecipline_upd", res);
	} catch (Err) {
		console.log(Err);
	}
}
function SendEmail(Name,Email,CellNo,Message)
{
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=SendEmail",
		data: {"Name":Name,"Email":Email,"CellNo":CellNo,"Message":Message}
	});
	request.done(function(data) {

		
		if( data>0)
		{	
			showSuccess('Successfully form has been submited!');
		}

	});
	request.fail(function(jqXHR, Status) {
		console.log(jqXHR.responseText);

	});

}

function UpdateNewMember()
{
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=UpdateNewMember",
		data: Members[0]
	});
	request.done(function(data) {

		
		if( data>0)
		{	
			showSuccess('Successfully Updated!');
		}

	});
	request.fail(function(jqXHR, Status) {
		console.log(jqXHR.responseText);

	});

	
}

function EditIsMember(selector)
{
	objEditRow = $(selector).closest('tr');
	MembershipId = objEditRow.find('.hdnMembershipId').val();
	var IsMember =objEditRow.find('.hdnIsMember').val();

	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=EditIsMember",
		data: {"MembershipId":MembershipId,"IsMember":IsMember}
	});
	request.done(function(data) {

		if( (data)==1)
			{	GetAllMember();
				showSuccess('Successfully Updated!');
			}

		});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function htmlBr( Json,Key)
{
	var b  = '';
	Json = JSON.parse(Json);
	$.each(Json, function(i, item) {
		if(i==Json.length)
		{
			b += item[Key];
		}
		else
		{
			b += item[Key]+'</br>';
		}
	});
	return b;
}

function GetAllMember()
{
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=GetAllMember",
		data: {}
	});
	request.done(function(data) {

		onGetAllMember(data);
		
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}

/*function BindProfile(data)
{
	try 
	{
		var res = JSON.parse(data);
		var totalExperience = 0;

		$.each(JSON.parse(res[0].JsonWorkInfo), function () {
			totalExperience += parseFloat(this.Experience);
		});

		BindTextToSelector('.tdName', res[0].FirstName+' '+res[0].MiddleName+' '+res[0].LastName);
		BindTextToSelector('.tdRealEstate', res[0].RealEstate);
		BindTextToSelector('.tdDesignation', JSON.parse(res[0].JsonWorkInfo)[0].Designation);
		BindTextToSelector('.tdQualification', res[0].Qualification+'/ '+res[0].Decipline+'/ '+res[0].Specialization);
		BindTextToSelector('.tdBusinessStartedYear', res[0].BusinessStartedYear);
		
		BindTextToSelector('.tdExperience', parseInt(totalExperience)+' yrs');
		BindTextToSelector('.tdCellNo', res[0].CellNo);
		BindTextToSelector('.tdLandline', res[0].Landline);
		BindTextToSelector('.tdEmail', res[0].Email);
		BindTextToSelector('.tdLocation', res[0].Location);
		BindTextToSelector('.headingMember', 'Membership Type: '+res[0].MembershipType);
		$('.tdProfilePic').attr('src','admin/upload/'+res[0].FileImage.trim());

	}
	catch (Err) {
		console.log(Err);
	}
}*/

function htmlComma( Json,Key)
{
	var index  = 0;
	var b  = '';
	Json = JSON.parse(Json);
	$.each(Json, function(i, item) {
		

		
		if((index%3==0)&& (index !=0))
		{
			
			b += '</br>';
			b += item[Key]+' | ';
		}
		else
		{
			b += item[Key]+' | ';
		}
		

		index++;
		
	});
	
	return b.slice(0,-2);
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
		BindTextToSelector('.tdName',  objEditRow.find('.hdnName').val());
		BindTextToSelector('.tdRealEstate',  objEditRow.find('.hdnRealEstate').val());
		BindTextToSelector('.tdAgentDesignation', objEditRow.find('.hdnAgentDesignation').val());
		BindTextToSelector('.tdQualification', objEditRow.find('.hdnQualification').val()+' | '+objEditRow.find('.hdnDecipline').val()+' | '+objEditRow.find('.hdnSpecialization').val());
		BindTextToSelector('.tdBusinessStartedYear', objEditRow.find('.hdnBusinessStartedYear').val());
		BindTextToSelector('.tdExperience', parseInt(totalExperience)+' yrs');
		BindTextToSelector('.tdCellNo', htmlComma(objEditRow.find('.hdnCellNo').val(),'CellNo'));
		BindTextToSelector('.tdLandline', htmlComma(objEditRow.find('.hdnLandline').val(),'Landline'));
		BindTextToSelector('.tdEmail', objEditRow.find('.hdnEmail').val());
		BindTextToSelector('.tdLocation', objEditRow.find('.hdnLocation').val());
		BindTextToSelector('.tdMembershipType', objEditRow.find('.hdnMembershipType').val());
		BindTextToSelector('.tdMembershipNo', objEditRow.find('.hdnMembershipNo').val());
		BindTextToSelector('.tdDesignation', objEditRow.find('.hdnDesignation').val());
		
		BindTextToSelector('.tdParentDesignation', objEditRow.find('.hdnParentDesignation').val());
		BindTextToSelector('.tdWorkArea', htmlComma(objEditRow.find('.hdnWorkArea').val(),'WorkArea'));
		BindTextToSelector('.tdDealership', htmlComma(objEditRow.find('.hdnDealership').val(),'Dealership'));
		BindTextToSelector('.tdWebsite', objEditRow.find('.hdnWebsite').val());
		BindTextToSelector('.tdTenure', objEditRow.find('.hdnStartDate').val() + ' to '+objEditRow.find('.hdnEndDate').val());
		BindTextToSelector('.tdCertificateCoursePrint', objEditRow.find('.hdnQualificationType').val() != 1 ? 'N/A' :  objEditRow.find('.hdnCertificateSession').val() +' | '+objEditRow.find('.hdnCertificateYear').val());
		BindTextToSelector('.tdDiplomaCoursePrint', objEditRow.find('.hdnQualificationType').val() != 2 ? 'N/A' :  objEditRow.find('.hdnDiplomaSession').val() +' | '+objEditRow.find('.hdnDiplomaYear').val());
		if(objEditRow.find('.hdnQualificationType').val()==3)
	    {
	        	BindTextToSelector('.tdCertificateCoursePrint', objEditRow.find('.hdnCertificateSession').val() +' | '+objEditRow.find('.hdnCertificateYear').val());
	        	BindTextToSelector('.tdDiplomaCoursePrint',   objEditRow.find('.hdnDiplomaSession').val() +' | '+objEditRow.find('.hdnDiplomaYear').val());
	
	    }
		$('.tdWebsite').html(objEditRow.find('.hdnWebsite').val());
		$('.tdWebsite').attr('href',objEditRow.find('.hdnWebsite').val());
		$('.tdLinkdin').attr('href',objEditRow.find('.hdnLinkdin').val());
		$('.tdFacebook').attr('href',objEditRow.find('.hdnFacebook').val());
		$('.tdProfilePic').attr('src','admin/upload/'+ objEditRow.find('.hdnFileImage').val().trim());

		var ParentDesignationId = objEditRow.find('.hdnParentDesignationId').val();
		if(ParentDesignationId==2)
		{
			BindTextToSelector('.tdSubDesignation',' / '+ objEditRow.find('.hdnSubDesignation').val());
		}

	}
	catch (Err) {
		console.log(Err);
	}

}

function onGetAllMember(data)
{  
	try 
	{
		var res = JSON.parse(data);
       // var res = JSON.parse(data);

       var divTbodyGoalFund = $('.MemberListing').html('');
       $('#MemberListing').tmpl(res).appendTo(divTbodyGoalFund);
           	var i=1;

       $('.trMember').each(function () {
    	$(this).find('td').first().text(i);
    	i++;
    });

   }
   catch (Err) {
   	console.log(Err);
   }

}

function CreateNewMember()
{
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=CreateNewMember",
		data: Members[0]
	});
	request.done(function(data) {

		var res = JSON.parse(data);
		if( data>0)
		{	
			showSuccess('Successfully Created!');
			 workinfo = [];
             workarea= [];
             dealership= [];
             cellno= [];
             landline= [];
			GetAllMember();
		}

	});
	request.fail(function(jqXHR, Status) {
		console.log(jqXHR.responseText);

	});

}

function FileUpload(fileselector) {
	ProgressBarShow();
	var fileUpload = $(fileselector).get(0);
	var files = fileUpload.files;
	var data = new FormData();
	if (files.length <= 0) {
		showError('No File Uploaded!');
		ProgressBarHide();
		return '';
	}

	var filename = '';
	var isError = false;
	for (var i = 0; i < files.length; i++) {
		data.append('file', files[i]);
	}
	$.ajax({
		url: "admin/DatabaseFiles/FileUpload.php?action=FileUpload",
		type: "POST",
		data: data,
		async: false,
		contentType: false,
		processData: false,
		success: function (result) { filename = result },
		error: function (err) { showError("File Upload Failure"); isError = true; }
	});

	ProgressBarHide();
	return filename;
}
function FileUploadHandler(fileselector) {
   // ProgressBarShow();
   var fileUpload = $(fileselector).get(0);
   var files = fileUpload.files;
   var data = new FormData();
   if (files.length <= 0) {
   	showError('No File Uploaded!');
   	ProgressBarHide();
   	return '';
   }

   var filename = '';
   var isError = false;
   for (var i = 0; i < files.length; i++) {
   	data.append(files[i].name, files[i]);
   }
   $.ajax({
   	url: "UploadHandler.ashx",
   	type: "POST",
   	data: data,
   	async: false,
   	contentType: false,
   	processData: false,
   	success: function (result) { filename = result },
   	error: function (err) { showError("File Upload Failure"); isError = true; }
   });

   ProgressBarHide();
   return filename;
}

function DisableDonarsControl()
{
	$('.ddlDonarAmount').val(0);
	$('.ddlDonarAmount').prop('disabled', true);
	$('.txtOtherAmount').prop('disabled', true);
}

function EnableDonarsControl()
{
	$('.ddlDonarAmount').prop('disabled', false);
	$('.txtOtherAmount').prop('disabled', false);
}
function AllChangeFunction()
{
	$('.ddlMembershipType').change(function () {
		var MembershipTypeId = $(this).val();
		var obj = MembershipFeeList.filter(x=>x.MembershipTypeId == MembershipTypeId);
		onGetAllMembershipFee(obj);
		if(MembershipTypeId==7)
		{
			EnableDonarsControl();
		}
		else
		{
			DisableDonarsControl();
		}
	});
	
	$('.ddlParentDesignation').change(function () {
		var ParentDesignationId = $(this).val();
		var obj = DesignationList.filter(x=>x.ParentDesignationId == ParentDesignationId);
		onGetAllDesignation(obj);


		
	});

}
function RemoveWorkArea(obj)
{
	$(obj).closest('.AppendedRowWorkArea').remove();
}

function RemoveLandline(obj)
{
	$(obj).closest('.AppendedRowLandline').remove();
}
function AppendAddLandline(selector) {
	if (!validateForm('.ValidateLandline'))
		return;
	var html = "<div class='col-md-3 AppendedRowLandline ValidateLandline'>";
	html += "<div class='form-group'>";
	html += "<label for='txtLandline'>Landline</label>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='AppendAddLandline(this)'><i class='fas fa-plus-square'></i></a>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='RemoveLandline(this)'><i class='fas fa-minus-square'></i></a>";
	html += "<input type='text' class='form-control txtLandline numericOnly' id='txtLandline ' placeholder='Enter landline no'>";
	html += "</div>";
	html += "</div>";

	$('.ValidateLandline:last').after($(html));
	validateNumeric();

}
function RemoveCellNo(obj)
{
	$(obj).closest('.AppendedRowCellNo').remove();
}
function AppendAddCellNo(selector) {
	if (!validateForm('.ValidateCellNo'))
		return;
	var html = "<div class='col-md-3 AppendedRowCellNo ValidateCellNo'>";
	html += "<div class='form-group'>";
	html += "<label for='txtCellNo'>Cell #</label>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='AppendAddCellNo(this)'><i class='fas fa-plus-square'></i></a>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='RemoveCellNo(this)'><i class='fas fa-minus-square'></i></a>";
	html += "<input type='text' class='form-control txtCellNo numericOnly' id='txtCellNo' placeholder='Enter cell no'>";
	html += "</div>";
	html += "</div>";

	$('.ValidateCellNo:last').after($(html));
	validateNumeric();

}

function AppendAddWorkArea(selector) {
	if (!validateForm('.ValidateWorkArea'))
		return;
	var html = "<div class='col-md-3 AppendedRowWorkArea ValidateWorkArea'>";
	html += "<div class='form-group'>";
	html += "<label for='txtWorkArea'>Working Area</label>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='AppendAddWorkArea(this)'><i class='fas fa-plus-square'></i></a>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='RemoveWorkArea(this)'><i class='fas fa-minus-square'></i></a>";
	html += "<input type='text' class='form-control txtWorkArea' id='txtWorkArea' placeholder='Enter work area'>";
	html += "</div>";
	html += "</div>";

	$('.ValidateWorkArea:last').after($(html));

}


function AppendAddDealership(selector) {
	if (!validateForm('.ValidateDealership'))
		return;
	var html = "<div class='col-md-3 AppendedRowDealership ValidateDealership'>";
	html += "<div class='form-group'>";
	html += "<label for='txtDealership'>Authorized Dealership</label>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='AppendAddDealership(this)'><i class='fas fa-plus-square'></i></a>";
	html += " &nbsp; <a href='javascript:void(0)' style='color:black' onclick='RemoveDealership(this)'><i class='fas fa-minus-square'></i></a>";
	html += "<input type='text' class='form-control txtDealership' id='txtDealership' placeholder='Enter authorized dealership'>";
	html += "</div>";
	html += "</div>";

	$('.ValidateDealership:last').after($(html));

}


function RemoveDealership(obj)
{
	$(obj).closest('.AppendedRowDealership').remove();
}

function GetAllNationality()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=GetAllNationality",
		data: {}
	});
	request.done(function(data) {

		onGetAllNationality(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}



function onGetAllNationality(data)
{ 
	try {
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference('.ddlNationality',res);
		FillDropDownByReference('.ddlNationality_upd',res);

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllCountry()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=GetAllCountry",
		data: {}
	});
	request.done(function(data) {

		onGetAllCountry(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}



function onGetAllCountry(data)
{ 
	try {
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference('.ddlCountry',res);
		FillDropDownByReference('.ddlCountry_upd',res);

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllMembershipFee()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=GetAllMembershipFee",
		data: {}
	});
	request.done(function(data) {

		var res = JSON.parse(data);
		MembershipFeeList = res;
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}

function onGetAllMembershipFee(data)
{
	try {
		/*  var res = JSON.parse(data);*/
		var res = (data);
		FillDropDownByReference('.ddlMembershipFee',res);
		FillDropDownByReference('.ddlMembershipFee_upd',res);

	}

	catch (Err) {
		console.log(Err);
	}
}
function GetAllMembershipType()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=GetAllMembershipType",
		data: {}
	});
	request.done(function(data) {

		onGetAllMembershipType(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}



function onGetAllMembershipType(data)
{ 
	try {
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference('.ddlMembershipType',res);
		FillDropDownByReference('.ddlMembershipType_upd',res);

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllYears()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=GetAllYears",
		data: {}
	});
	request.done(function(data) {

		onGetAllYears(data);
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}

function onGetAllYears(data)
{ 
	try {
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference('.ddlBusinessStartedYear',res);
		FillDropDownByReference('.ddlBusinessStartedYear_upd',res);
		FillDropDownByReference('.ddlPassedYear',res);
		FillDropDownByReference('.ddlPassedYear_upd',res);
	}
	catch (Err) {
		console.log(Err);
	}
}

function GetAllQualification()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "admin/DatabaseFiles/Form.php?action=GetAllQualification",
		data: {}
	});
	request.done(function(data) {

		onGetAllQualification(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}

function onGetAllQualification(data)
{ 
	try {
		/*  var res = JSON.parse(data);*/
		var res = JSON.parse(data);
		FillDropDownByReference('.ddlQualification',res);
		FillDropDownByReference('.ddlQualification_upd',res);

	}
	catch (Err) {
		console.log(Err);
	}
}

function AddRowControlToJSON()
{
	$(".Validate").each(function() {
		//console.log($(this).find('.txtDesignation').val());
		var Organization = $(this).find('.txtOrganization').val();
		var Designation = $(this).find('.txtDesignation').val();
		var Experience = $(this).find('.ddlWorkExperience').val();

		workinfo.push({Organization: Organization,Designation: Designation,Experience: Experience});
	});

	$(".ValidateWorkArea").each(function() {
		//console.log($(this).find('.txtDesignation').val());
		var WorkArea = $(this).find('.txtWorkArea').val();

		workarea.push({WorkArea: WorkArea});
	});

	$(".ValidateDealership").each(function() {
		//console.log($(this).find('.txtDesignation').val());
		var Dealership = $(this).find('.txtDealership').val();
		dealership.push({Dealership: Dealership});
	});

	$(".ValidateCellNo").each(function() {
		//console.log($(this).find('.txtDesignation').val());
		var CellNo = $(this).find('.txtCellNo').val();
		cellno.push({CellNo: CellNo});
	});

	$(".ValidateLandline").each(function() {
		//console.log($(this).find('.txtDesignation').val());
		var Landline = $(this).find('.txtLandline').val();
		landline.push({Landline: Landline});
	});
}
function AddRowControlToJSON_upd()
{
	$(".Validate_upd").each(function() {
		//console.log($(this).find('.txtDesignation').val());
		var Organization = $(this).find('.txtDesignation_upd').val();
		var Designation = $(this).find('.txtDesignation_upd').val();
		var Experience = $(this).find('.ddlWorkExperience_upd').val();

		workinfo.push({Organization: Organization,Designation: Designation,Experience: Experience});
	});

}


function AppendAddWorkRow(obj)
{

	if (!validateForm('.Validate'))
		return;

	//AddRowControlToJSON();

	var rowHtml = "<div class='row AppendedRow Validate'>";
	rowHtml +=  "<div class='col-md-4'>";
	rowHtml +=  "<div class='form-group'>";
	rowHtml +=  "<label for='txtQualification'>Organization</label>";
	rowHtml +=  "<input type='text' class='form-control txtOrganization' id='txtOrganization' placeholder='Enter organization'>";
	rowHtml +=  "</div>";
	rowHtml +=  "</div>";
	rowHtml +=  "<div class='col-md-4'>";
	rowHtml +=  "<div class='form-group'>";
	rowHtml +=  "<label for='txtDesignation'>Designation</label>";
	rowHtml +=  "<input type='text' class='form-control txtDesignation' id='txtDesignation' placeholder='Enter designation'>";
	rowHtml +=  "</div>";
	rowHtml +=  "</div>";
	rowHtml +=  "<div class='col-md-2'>";
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
	rowHtml +="<label>&nbsp;</label>"
	rowHtml += "<button type='button' class='btn btn-danger btn-sm btnRemoveWork' onclick='RemoveWorkRow(this)'><i class='fas fa-minus'></i> Remove</button>";
	rowHtml += "</div>";
	rowHtml += "</div>";
	rowHtml += "</div>";

	$('.Validate:last').after($(rowHtml));
	
	
}

function RemoveWorkRow(obj)
{

	$(obj).closest('.AppendedRow').remove();
	//console.log($(obj).closest('.AppendedRow'));

}

function PrintTable(argument) {
	var html = "<div ='Print'>";
	html+= "<table class='' style ='width: 100%; height: 100%; color: black;font-family:'Raleway', sans-serif;font-size:14px;'>";
	html+= "<thead>";
	html+= "<tr style='height:145px'>";
	html+= "<td>";
	html+= "<img height='130px;' class='tdProfilePic' width='130px;' alt='User Pic' src=''  style=''>";
	html+= "</td>";
	html+= "<td colspan='2' align='right'>";
	html+= "<label>Membership: </label>";
	html+= "<label>123</label>";
	html+= "<br>";
	html+= "<label>Membership Type: </label>";
	html+= "<label>Life Time Member</label>";
	html+= "<br>";
	html+= "<label>Management Commity: </label>";
	html+= "<label>Sports</label>";
	html+= "<br>";
	html+= "<label>Tenure: </label>";
	html+= "<label>(2018-11-17 to 2018-12-18)</label>";
	html+= "</td>";
	html+= "</tr>";
	html+= "</thead>";
	html+= "<tbody>";
	html+= "<tr class='trPrint' style='background-color:#c8560f;color:white;height:35px;'>";
	html+= "<td colspan='3' style='font-weight: 500;font-size: 16px'>&nbsp;Personal information</td>";
	html+= "</tr>";
	html+= "</tbody>";
	html+= "</table>";
	html+= "</div>";


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

