// onload function to run at the load of every window
window.onload = function () {
	//setHeight();
	$('.consum').elastic();
	$('.contitle').elastic();
	setEqualHeight("col1:col2", "colcontent");
	$('.consum').bind('resize', setHeight());
	$('.contitle').bind('resize', setHeight());
}

function showNewsDiv(nID) {
	// Hide all the news divs
	$('div[id^="nid:"]').hide();

	// Show the wanted news div
	$('div[id^="nid:'+nID+'"]').show();
}

function showEventDiv(eID) {
	// Hide all the news divs
	$('div[id^="eid:"]').hide();

	// Show the wanted news div
	$('div[id^="eid:'+eID+'"]').show();
}

function showMinistryDiv(mID) {
	// Hide all the news divs
	$('div[id^="mid:"]').hide();

	// Show the wanted news div
	$('div[id^="mid:'+mID+'"]').show();
}

function validateAmount(amount) {
	if(amount.value.match( /^[0-9]+(\.([0-9]+))?$/)) {
		return true;
	}
	else {
		alert('You must enter a valid donation.');
		amount.focus();
		return false;
	}
}

function setEqualHeight(colstr, targdiv) {
	var cols = new Array();
	cols = colstr.split(":");
	
	/* This gets the height of the container div */
	var targHeight = document.getElementById(targdiv).clientHeight;
	
	/* set the two columns equal to the  */
	for( var i = 0; i < cols.length; i++) {
		document.getElementById(cols[i]).style.height = targHeight;
	}
}

function dispHoverUL() {
	var activeUL = document.getElementById("id_subNav_activeUL");
	activeUL.setAttribute("class", "");
}

function dispActiveUL() {
	var activeUL = document.getElementById("id_subNav_activeUL");
	activeUL.setAttribute("class", "subNav_activeUL");
}


// SERMONS & MEDIA //
function sermon_activate(sermon_id) {
	
}
