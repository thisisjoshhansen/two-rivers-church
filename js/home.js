/*
** PACKAGE:	Two Rivers Church
** CREATOR:	Jacob Burton
** DATE:		26 JAN 2011
** PURPOSE:	admin javascript
*/

function showDiv(div) {
	document.getElementById(div).style.display = '';
}
function hideDiv(div) {
	//$("#"+div).hide();
	document.getElementById(div).style.display = 'none';
}
function toggleDiv(div) {
	tdiv = document.getElementById(div);
	if( tdiv.style.display == 'none' ) {
		tdiv.style.display = '';
	} else {
		tdiv.style.display = 'none';
	}
}

function showValueDiv(valID) {
	// Hide all the news divs
	$('div[id^="valID:"]').hide();

	// Show the wanted news div
	$('div[id^="valID:'+valID+'"]').show();
}

function showTopicDiv( id, topic ) {
	// Hide all the other divs for that topic
	$('div[id^="'+topic+':"]').hide();

	// Show the wanted div
	$('#'+topic+'\\:'+id).show();
}

window.size = function()
{
	var w = 0;
	var h = 0;

	//IE
	if(!window.innerWidth)
	{
		//strict mode
		if(!(document.documentElement.clientWidth == 0))
		{
			w = document.documentElement.clientWidth;
			h = document.documentElement.clientHeight;
		}
		//quirks mode
		else
		{
			w = document.body.clientWidth;
			h = document.body.clientHeight;
		}
	}
	//w3c
	else
	{
		w = window.innerWidth;
		h = window.innerHeight;
	}
	return {width:w,height:h};
}

window.center = function()
{
	var hWnd = (arguments[0] != null) ? arguments[0] : {width:0,height:0};

	var _x = 0;
	var _y = 0;
	var offsetX = 0;
	var offsetY = 0;

	//IE
	if(!window.pageYOffset)
	{
		//strict mode
		if(!(document.documentElement.scrollTop == 0))
		{
			offsetY = document.documentElement.scrollTop;
			offsetX = document.documentElement.scrollLeft;
		}
		//quirks mode
		else
		{
			offsetY = document.body.scrollTop;
			offsetX = document.body.scrollLeft;
		}
	}
	//w3c
	else
	{
		offsetX = window.pageXOffset;
		offsetY = window.pageYOffset;
	}

	_x = ((this.size().width-hWnd.width)/2)+offsetX;
	_y = ((this.size().height-hWnd.height)/2)+offsetY;

	return{x:_x,y:_y};
}

function getAbsoluteDivs()  
{  
    var arr = new Array();  
    var all_divs = document.body.getElementsByTagName("DIV");  
    var j = 0;  
  
    for (i = 0; i < all_divs.length; i++)  
    {  
        if (all_divs.item(i).currentStyle)  
            style = all_divs.item(i).currentStyle.position;  
        else  
            style = window.getComputedStyle(  
                all_divs.item(i), null).position;  
  
        if ('absolute' == style)  
        {  
            arr[j] = all_divs.item(i);  
            j++;  
        }  
    }  
    return arr;  
}  

function bringToFront(id) {
    if (!document.getElementById ||  
        !document.getElementsByTagName)  
        return;  
  
    var obj = document.getElementById(id);  
    var divs = getAbsoluteDivs();  
    var max_index = 0;  
    var cur_index;  
  
    // Compute the maximal z-index of  
    // other absolute-positioned divs  
    for (i = 0; i < divs.length; i++)  
    {  
        var item = divs[i];  
        if (item == obj ||  
            item.style.zIndex == '')  
            continue;  
  
        cur_index = parseInt(item.style.zIndex);  
        if (max_index < cur_index)  
        {  
            max_index = cur_index;  
        }  
    }  
  
    obj.style.zIndex = max_index + 1;
}

var isIE = document.all?true:false;
if (!isIE) document.captureEvents(Event.CLICK);
document.onclick = getMousePosition;
function getMousePosition(e) {
	var _x;
	var _y;
	if (!isIE) {
		_x = e.pageX;
		_y = e.pageY;
	}
	if (isIE) {
		_x = e.clientX + document.body.scrollLeft;
		_y = e.clientY + document.body.scrollTop;
	}

	posX=_x;
	posY=_y;
	return true;
}

function popUpWindow(parentLayer, childLayer, id) {

	if( $('#'+childLayer).is(':visible') ) {
		$('#'+childLayer).hide();
		return;
	}

	chi = document.getElementById( childLayer );
	par = document.getElementById( parentLayer );

	offLeft = offTop = 0;
	offLeft = par.offsetLeft;

	do {
		//offLeft += par.offsetLeft;
		offTop  += par.offsetTop;
	}
	while (par = par.offsetParent);

	// Size of reservation container
	offLeft += 40;
	offTop += 0;

	chi.style.left = offLeft + "px";
	chi.style.top  = offTop + "px";

	$('#'+childLayer).load('popups/'+childLayer+'.php', {id: id},
		function(response) {
			if( response == '-1' ) {
				alert('You must be logged in as a manager to do this!');
			}
			else
				$('#'+childLayer).show();
		}
	);
}


/******************
	DIALOG
******************/
function openDialog(id, topic) {
	$("#admin-dialog\\:"+topic).load("dialogs/admin-dialog:"+topic+".php", {id: id},
		function(response) {
			if( response == '-1' ) {
				// Session has expired
				alert('You must be logged in as a manager to do this!');
			}
			else if( response == '0' ) {
				// id was not set in the POST variables for some reason
				alert('There was an error with this script, please inform a web developer!');
			}
			else {
				// Set the dialog box title
				$("#admin-dialog\\:"+topic).dialog( "option", "title", $("#admin-dialog\\:"+topic+"-title").text() );

				// Open the dialog
				$("#admin-dialog\\:"+topic).dialog( "open" );
			}
		}
	);
}

function closeWindow(div) {
		$('#'+div).hide();
}

function adminEditBox(editBox) {
	$('#'+editBox).attr('readonly', false);
	$('#'+editBox).css('border', '2px #FFFFFF inset');
	$('#'+editBox).css('background-color', '#30343A');
	$('#'+editBox).css('resizable', true);


	$('#' + editBox + 'EditSave').html("<a href=\"javascript:adminSaveEditBox(\'"+editBox+"\');\" class=\"saveEditBox\">save changes</a> <a href=\"javascript:adminCancelEditBox(\'"+editBox+"\');\" class=\"cancelEditBox\">cancle</a>");
}

// SERVICES
function serviceChooseLocation(ID) {
}


