GetAllReports();

GetAllMembers();
var MembersList;
function GetAllReports() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Reports.php?action=GetAllReports",
		data: {}
	});
	request.done(function(data) {
		onGetAllReports(data);
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllReports(data) {
	
	try {
		var res = data;
    // var res = data;

    var divTbodyGoalFund = $(".ReportsListing").html("");
    $("#ReportsListing").tmpl(res).appendTo(divTbodyGoalFund);
    var i = 1;
    $('.trReports').each(function () {
    	$(this).find('td').first().text(i);
    	i++;
    });
    AllClickFunction();
} catch (Err) {
	console.log(Err);
}
}


function GetAllMembers() {
	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Reports.php?action=GetAllMember",
		data: {}
	});
	request.done(function(data) {
		onGetAllMembers(data);
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);
	});
}

function onGetAllMembers(data) {
	
	try {
		var res = data;
		MembersList = res;
		var divTbodyGoalFund = $(".MembersListing").html("");
		$("#MembersListing").tmpl(res).appendTo(divTbodyGoalFund);
		 divTbodyGoalFund = $(".MembersListingConcise").html("");
		$("#MembersListingConcise").tmpl(res).appendTo(divTbodyGoalFund);
		 divTbodyGoalFund = $(".MembersListingGeneral").html("");
		$("#MembersListingGeneral").tmpl(res).appendTo(divTbodyGoalFund);
		
		
		var i = 1;
		$('.trMembers').each(function () {
			$(this).find('td').first().text(i);
			i++;
		});
		 i = 1;
		$('.trMembersConcise').each(function () {
			$(this).find('td').first().text(i);
			i++;
		});
		 i = 1;
		$('.trMembersGeneral').each(function () {
			$(this).find('td').first().text(i);
			i++;
		});
	} catch (Err) {
		console.log(Err);
	}
}


function AllClickFunction() {
	

	$(".btnConsolidatedConcise").click(function () {
		
		tableToExcelFormatted('myTableConcise','ConsolidatedConciseMembersSheet');

	});

	$('.btnConsolidated').click(function () {
		
		tableToExcelFormatted('myTable','ConsolidatedMembersSheet');

	});
	$('.btnGenernalList').click(function () {
		
		tableToExcelFormatted('myTableGeneral','GeneralMembersSheet');

	});
}



