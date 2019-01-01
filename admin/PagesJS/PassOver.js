GetAllMember();
AllClickFunction();
var objEditRow;
function GetAllMember() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Members.php?action=GetAllMemberPassOver",
		data: {}
	});
	request.done(function(data) {
		onGetAllMember(data);
		searchTable();
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllMember(data) {
	
	try {
		var res = data;
    // var res = data;

    var divTbodyGoalFund = $(".PassOverListing").html("");
    $("#PassOverListing").tmpl(res).appendTo(divTbodyGoalFund);
} catch (Err) {
	console.log(Err);
}
}



function AllClickFunction() {
	$(".btnSendEmail").click(function(selector) {

	});
}

function SendEmail(selector)
{
    objEditRow = $(selector).closest("tr");
	var To = objEditRow.find(".hdnEmail").val();
	var EndDate = objEditRow.find(".tdEndDate").text();
	var Difference = objEditRow.find(".hdnDifference").val();
	var url = Difference < 0 ?'SendMailExpired' : 'SendMailPassOver';
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/PassOver.php?action="+url,
		data: {"To":To,"EndDate":EndDate}
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

