/*
** PACKAGE:	Two Rivers Church
** CREATOR:	Jacob Burton
** DATE:		26 JAN 2011
** PURPOSE:	dom
*/
function redrawDiv(div) {
	$('#'+div).load('ajax/redraw_'+div+'.php');
}

$(function() {
	//alert(location.hash.substring(1));

	$( "#datepicker" ).datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
		dateFormat: "yy-mm-dd",
		showAnim: "fadeIn"
	});

	$('div[id^="admin-dialog\\:"]').dialog(
		{
			autoOpen:	false,
			width:	400,
			resizable: true,
			modal:	true,
			buttons:	{
					"Save!": function() {
						var idArray = $(this).attr('id').split(':');
						var topic = idArray[1];

						// This serializes the form information and escapes the single quotes
						var data = $("#"+topic+"Form").serialize().replace(/\'/g, '\\\'');

						// Make sure that all the fields have been filled in
						if( data.search("=&") != -1) {
							alert("You have not provided all the required information!");
							return;
						}

						// If it is a new Doctrine, we have to save it as new
						// Else, we have to update the doctrine that it is
						if( data.search("&id=0") != -1 ) {
							$.ajax({
								type: 'GET',
								url: '/ajax/admin/add_'+topic+'.php',
								data: data,
								error:function(xhr, err, e) {
									alert('ERROR:\n'+err);
								}
							});
						} else {
							$.ajax({
								type: 'GET',
								url: '/ajax/admin/edit_'+topic+'.php',
								data: data,
								error:function(xhr, err, e) {
									alert('ERROR:\n'+err);
								}
							});
						}

						// Redraw the topic div and close the dialog
						$('#admin-topic\\:'+topic).load('ajax/redraw/admin-topic:'+topic+'.php', data);
						$( this ).dialog( "close" );
					},
					Cancel: function() {
						$( this ).dialog( "close" );
					}
				},
				close: function() {
					allFields.val( "" );
				}
		}
	);
});

