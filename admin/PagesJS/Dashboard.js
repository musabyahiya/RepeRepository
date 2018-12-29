GetAllActiveMembers();
GetAllPassOverMembers();
GetAllInActiveMembers();
GetAllActiveMembersCount();
GetAllExpiredMembers();
GetAllPaymentCurrentMonth();
GetAllPaymentThisYear();
GetAllPaymentPreviousYear();
GetAllMonthWiseMembers();
GetAllYearWiseMembers();
var Months =['January','Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
function GetAllActiveMembers()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllActiveMembers",
		data: {}
	});
	request.done(function(data) {

		onGetAllActiveMembers(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllActiveMembers(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingActiveMembers'),res[0].ActiveMembers)

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllPassOverMembers()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllPassOverMembers",
		data: {}
	});
	request.done(function(data) {

		onGetAllPassOverMembers(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllPassOverMembers(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingPassOverMembers'),res[0].PassOverMembers);
		

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllInActiveMembers()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllInActiveMembers",
		data: {}
	});
	request.done(function(data) {

		onGetAllInActiveMembers(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllInActiveMembers(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingInActiveMembers'),res[0].InActiveMembers);

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllActiveMembersCount()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllActiveMembersCount",
		data: {}
	});
	request.done(function(data) {

		onGetAllActiveMembersCount(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllActiveMembersCount(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingTotalMembers'),res[0].TotalMembers);

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllExpiredMembers()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllExpiredMembers",
		data: {}
	});
	request.done(function(data) {

		onGetAllExpiredMembers(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllExpiredMembers(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingExpiredMembers'),res[0].ExpiredMembers);

	}

	catch (Err) {
		console.log(Err);
	}
}
function GetAllPaymentCurrentMonth()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllPaymentCurrentMonth",
		data: {}
	});
	request.done(function(data) {

		onGetAllPaymentCurrentMonth(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllPaymentCurrentMonth(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingMonthlyIncome'),moneyFormat(res[0].MonthlyIncome));
		BindTextToSelector($('.SpanMonth'),Months[res[0].Month-1]);
		

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllPaymentThisYear()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllPaymentThisYear",
		data: {}
	});
	request.done(function(data) {

		onGetAllPaymentThisYear(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllPaymentThisYear(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingYearlyIncome'),moneyFormat(res[0].YearlyIncome));
		BindTextToSelector($('.SpanYear'),res[0].Year);

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllPaymentPreviousYear()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllPaymentPreviousYear",
		data: {}
	});
	request.done(function(data) {

		onGetAllPaymentPreviousYear(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllPaymentPreviousYear(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;
		BindTextToSelector($('.HeadingPreviousYearIncome'),moneyFormat(res[0].PreviousYearIncome));
		BindTextToSelector($('.SpanPreviousYear'),res[0].PreviousYear);

	}

	catch (Err) {
		console.log(Err);
	}
}

function GetAllMonthWiseMembers()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=ABC",
		data: {}
	});
	request.done(function(data) {

		onGetAllMonthWiseMembers(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllMonthWiseMembers(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;


		var barData = {
			labels: ["January", "February", "March", "April", "May", "June", "July","Aug","Sep","Oct","Nov", "Dec"],
			datasets: [
			{
				label: "Members",
				backgroundColor: 'rgba(26,179,148,0.5)',
				pointBorderColor: "#fff",
				data: [res[0].Jan, res[0].Feb, res[0].Mar, res[0].Apr, res[0].May, res[0].Jun,
				res[0].Jul,res[0].Aug,res[0].Sep,res[0].Oct,res[0].Nov,res[0].Dec]
			}
			]
		};
		var barOptions = {
			responsive: true
		};


		var ctx2 = document.getElementById("barChart").getContext("2d");
		new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});


	}

	catch (Err) {
		console.log(Err);
	}
}


function GetAllYearWiseMembers()
{
	
	var request = $.ajax({
		method: "POST",
		url:    "../DatabaseFiles/Dashboard.php?action=GetAllYearWiseMembers",
		data: {}
	});
	request.done(function(data) {

		onGetAllYearWiseMembers(data);
		
		
	});
	request.fail(function(jqXHR, textStatus) {
		console.log(textStatus);

	});
}


function onGetAllYearWiseMembers(data)
{ 
	try {
		/*  var res = data;*/
		var res = data;


		var lineData = {
			labels: ["2018", "2019", "2020", "2021", "2022", "2023", "2024"],
			datasets: [

			{
				label: "Members",
				backgroundColor: 'rgba(26,179,148,0.5)',
				borderColor: "rgba(26,179,148,0.7)",
				pointBackgroundColor: "rgba(26,179,148,1)",
				pointBorderColor: "#fff",
				data: [res[0].Eighteen, res[0].Nineteen, res[0].Twenty, res[0].TwentyOne, res[0].TwentyTwo, res[0].TwentyThree, res[0].TwentyFour]
			}
			]
		};

		var lineOptions = {
			responsive: true
		};


		var ctx = document.getElementById("lineChart").getContext("2d");
		new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});


	}

	catch (Err) {
		console.log(Err);
	}
}