/*
** PACKAGE:	Two Rivers Church
** AUTHOR:	Jacob Burton
** DATE:		26 JAN 2011
** PURPOSE:	AJAX scripts for 2 rivers website
*/

/*	ADMIN	*/

// EVENTS STUFF
function admin_addEvent() {

	// This serializes the form information and escapes the single quotes
	var data = $('#eventForm').serialize().replace(/\'/g, '\\\'');

	// Make sure that all the fields have been filled in
	if( data.search("=&") != -1) {
		alert("You have not provided all the required information!");
		return;
	}

	$.ajax({
		type: 'GET',
		url: '/ajax/admin_addEvent.php',
		data: data,
		success:function(response) {
			$('#admin_eventForm').hide();
			$('#admin_eventForm').html('');
			redrawDiv('adminEvents');
		},
		error:function(xhr, err, e) {
			alert('ERROR:\n'+err);
		}
	});

}

function admin_deleteEvent(ID) {
	if( !confirm("This will permanentally delete this news item!" ) )
		return;

	var data = {'id': ID};

	$.post("/ajax/admin_deleteEvent.php", data, 
		function(response) {
			redrawDiv('adminEvents');

			if( response != '1' ) {
				alert("Something went wrong...");
			}
		}
	);
}

function admin_editEvent(ID) {

	// This serializes the form information and escapes the single quotes
	var data = $('#eventForm').serialize().replace(/\'/g, '\\\'');
	data += '&id='+ID

	// Make sure that all the fields have been filled in
	if( data.search("=&") != -1) {
		alert("You have not provided all the required information!");
		return;
	}

	$.ajax({
		type: 'GET',
		url: '/ajax/admin_editEvent.php',
		data:data,
		success:function(response) {
			$('#admin_eventForm').hide();
			$('#admin_eventForm').html('');
			redrawDiv('adminEvents');
		},
		error:function(xhr, err, e) {
			alert('ERROR:\n'+err);
		}
	});

}

// NEWS STUFF
function admin_addNews() {

	// This serializes the form information and escapes the single quotes
	var data = $('#newsForm').serialize().replace(/\'/g, '\\\'');

	// Make sure that all the fields have been filled in
	data += '&id=?'
	if( data.search("=&") != -1) {
		alert("You have not provided all the required information!");
		return;
	}

	$.ajax({
		type: 'GET',
		url: '/ajax/admin_addNews.php',
		data: data,
		success:function(response) {
			$('#admin_newsForm').hide();
			$('#admin_newsForm').html('');
			redrawDiv('adminNews');
		},
		error:function(xhr, err, e) {
			alert('ERROR:\n'+err);
		}
	});

}

function admin_deleteNews(ID) {
	if( !confirm("This will permanentally delete this news item!" ) )
		return;

	var data = { id: ID };

	$.post("/ajax/admin_deleteNews.php", data, 
		function(response) {
			redrawDiv('adminNews');

			if( response != '1' ) {
				alert("Something went wrong...");
			}
		}
	);
}

function admin_editNews(ID) {

	// This serializes the form information and escapes the single quotes
	var data = $('#newsForm').serialize().replace(/\'/g, '\\\'');

	// Make sure that all the fields have been filled in
	data += '&id='+ID;
	if( data.search("=&") != -1) {
		alert("You have not provided all the required information!");
		return;
	}

	$.ajax({
		type: 'GET',
		url: '/ajax/admin_editNews.php',
		data:data,
		success:function(response) {
			$('#admin_newsForm').hide();
			$('#admin_newsForm').html('');
			redrawDiv('adminNews');
		},
		error:function(xhr, err, e) {
			alert('ERROR:\n'+err);
		}
	});

}

// LOCATIONS
function admin_addLocation() {

	// This serializes the form information and escapes the single quotes
	var data = $('#locForm').serialize().replace(/\'/g, '\\\'');
	data += '&id=';

	// Make sure that all the fields have been filled in
	if( data.search("=&") != -1) {
		alert("You have not provided all the required information!");
		return;
	}

	$.ajax({
		type: 'GET',
		url: '/ajax/admin_addLocation.php',
		data:data,
		success:function(response) {
			$('#admin_locationForm').hide();
			redrawDiv('adminLocs');
			redrawDiv('adminServs');
		},
		error:function(xhr, err, e) {
			alert('ERROR:\n'+err);
		}
	});
}

function admin_deleteLocation(ID) {
	if( !confirm("This will permanentally delete this location!" ) )
		return;

	var data = { id: ID };

	$.post("/ajax/admin_deleteLocation.php", data, 
		function(response) {
			redrawDiv('adminLocs');
			redrawDiv('adminServs');
		}
	);
}

function admin_editLocation(ID) {

 	// This serializes the form information and escapes the single quotes
	var data = $('#locForm').serialize().replace(/\'/g, '\\\'');
	data += '&id='+ID;

	// Make sure that all the fields have been filled in
	if( data.search("=&") != -1) {
		alert("You have not provided all the required information!");
		return;
	}
	$.ajax({
		type: 'GET',
		url: '/ajax/admin_editLocation.php',
		data:data,
		success:function(response) {
			$('#admin_locationForm').hide();
			redrawDiv('adminLocs');
			redrawDiv('adminServs');
		},
		error:function(xhr, err, e) {
			alert('ERROR:\n'+err);
		}
	});

}

// SERVICES
function admin_addService(form) {
	var servLocation = document.getElementById('radioLocForm');
	var locIndex = null;
	for (i=0; i < servLocation.length; i++) {
		if( servLocation[i].checked ) {
			locIndex = i;
		}
	}

	if( locIndex == null ) {
		alert("You must select a location for this service!");
		return;
	}

	if(	form.servDay.value == null || form.servHour.value == null || form.servMin.value == null ) {
		alert('You have not entered in all of the time and day information!');
		return;
	}
	var data = {
		location: servLocation[locIndex].value,
		day: form.servDay.value,
		hour: form.servHour.value,
		min: form.servMin.value
	};

	$.ajax({
		type: 'GET',
		url: '/ajax/admin_addService.php',
		data:data,
		success:function(response) {
			$('#admin_serviceForm').hide();

			if( response == '1' ) {
				redrawDiv('adminServs');
			}
			else if( response == '2' ) {
				alert("Sorry, I was unable to add the service. Please inform a developer!");
			}
			else
				alert("Sorry, something went wrong. Please inform a developer!");
		},
		error:function(xhr, err, e) {
			alert('ERROR:\n'+err);
		}
	});
}

function admin_deleteService(checkboxID) {
	var servCheckBox = document.getElementById(checkboxID);
	var checkedServs = "";

	for( var i = 0; i < servCheckBox.length; i++ ) {
		if( servCheckBox[i].checked ) {
			checkedServs += servCheckBox[i].value+":";
		}
	}

	if( checkedServs == "" ) {
		alert("You have not selected any services to delete!");
		return;
	}
	else {
		if( checkedServs.split(':').length > 2 ) {
			var msg = "This will permanentally delete these services!";
		} else {
			var msg = "This will permanentally delete this service!";
		}
		if( !confirm(msg) )
			return;
	}

	var data = { id: checkedServs };

	$.post("ajax/admin_deleteService.php", data, 
		function(response) {
			redrawDiv('adminServs');
		}
	);
}

// DOCTRINE & CORE VALUE STUFF
function admin_deleteItem(ID, topic) {
	if( !confirm("This will permanentally delete this doctrine item!") )
		return;

	var data = { id: ID };

	$.post("ajax/admin/delete_"+topic+".php", data, 
		function(response) {
			data = { id: '-1' };
			$('#admin-topic\\:'+topic).load('ajax/redraw/admin-topic:'+topic+'.php');

			if( response != '1' ) {
				alert("Something went wrong...");
			}
		}
	);
}

// BOX STUFF
function adminSaveEditBox(boxTitle) {
	if( !confirm("This will permanently change the text for this box, would you still like to continue?") ) exit;
	var box = document.getElementById(boxTitle);
	var content = box.value;
	var data = {	b: boxTitle,
				c: content };
	$.ajax({
		type: 'post',
		url: '../ajax/adminSaveEditBox.php',
		data: data,
		dataType: 'html',
		success: function(response) {
			if( response == '0' ) {
				$('#'+boxTitle).attr('readonly', true);
				$('#'+boxTitle).css('border', '');
				$('#'+boxTitle).css('background-color', '');

				$('#' + boxTitle + 'EditSave').html('<a href="javascript:adminEditBox(\''+boxTitle+'\');" class="editBox">edit box</a>');
			}
			else if( response == '-1' ) {
				alert("Something went wrong...");
				adminCancelEditBox(boxTitle);
			}
			else if( response == '1' ) {
				alert("Incorrect http parameters.");
				adminCancelEditBox(boxTitle);
			}
			else if( response == '2' ) {
				alert("You must be a site admin to do this.");
				adminCancelEditBox(boxTitle);
			}
		}
	});
}

function adminCancelEditBox(boxTitle) {
	if( !confirm("If you cancel the edit, you will lose all your changes. Would you still like to continue?") ) exit;
	var box = document.getElementById(boxTitle);
	$.ajax({
		type: 'GET',
		url: 'ajax/adminCancelEditBox.php',
		data: 'b=' + boxTitle,
		dataType: 'html',
		success: function(response) {

			if( response == '-1' ) {
				alert("Something went wrong...");
			}

			else {
				// Reset the box to its orriginal state
				$('#'+boxTitle).val(response);
				$('#'+boxTitle).attr('readonly', true);
				$('#'+boxTitle).css('border', '');
				$('#'+boxTitle).css('background-color', '');

				// Change to the edit button
				$('#' + boxTitle + 'EditSave').html('<a href="javascript:adminEditBox(\''+boxTitle+'\');" class="editBox">edit box</a>');
			}
		}
	});
}
