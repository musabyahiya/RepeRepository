

GetAllMenus();
//GetUserInfo();


function GetUserInfo() {

	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Users.php?action=GetUserInfo",
		data: {}
	});
	request.done(function (data) {

		onGetUserInfo(data);

	});
	request.fail(function (jqXHR, textStatus) {
		console.log(textStatus);

	});
}

function onGetUserInfo(data) {
	try {

		var res = data;
		BindTextToSelector('.lblUserName', res[0].FirstName);

	}
	catch (Err) {
		console.log(Err);
	}

}
function GetAllMenus() {

	var request = $.ajax({
		method: "POST",
		url: "../DatabaseFiles/Nav.php?action=GetAllMenus",
		data: {}
	});
	request.done(function (data) {

		onGetAllMenus(data);

	});
	request.fail(function (jqXHR, textStatus) {
		console.log(textStatus);

	});
}

function onGetAllMenus(data) {
	try {

		/* var res = data;*/
		var res = data;
		if (res.length == 0) {
            //window.location.href = "../Login.php";
        }

        var html = '';
        $.each(res, function (key, value) {

        	if (value.IsParent == 1) {
        		html += "<li>";
        		html += "<a href='#'>";
        		html += "<i class='" + value.Icon + "'></i>";
        		html += "<span class='nav-label'>" + value.MenuItemName + "</span>";
        		html += "<span class='fa arrow'></span>";
        		html += "</a>";

        		var childMenus = res.filter(x=> x.ParentId == value.MenuItemId);
        		html += "<ul class='nav nav-second-level collapse'>";
        		/*Binding Child Menus*/
        		$.each(childMenus, function (key2, value2) {
        			html += "<li>";
        			html += "<a href='../Pages/" + value2.MenuItemURL + "'><i class='fa fa-align-justify'></i> " + value2.MenuItemName + "</a>";
        			html += "</li>";
        		})
        		/*Binding Child Menus*/
        		html += "</ul>";
        		html += "</li>";
        	}

        });
        $(html).insertAfter($(".AppendAfter"));
    }
    catch (Err) {
    	console.log(Err);
    }

}

