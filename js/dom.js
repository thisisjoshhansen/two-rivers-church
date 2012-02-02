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

	// DATEPICKER INIT
	$( "#datepicker" ).datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
		dateFormat: "yy-mm-dd",
		showAnim: "fadeIn"
	});

	// DIALOG INIT
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

	// SIDE-SCROLL INIT
	//scrollpane parts
	var scrollPane = $( ".scroll-pane" ),
		scrollContent = $( ".scroll-content" );
	
	//build slider
	var scrollbar = $( ".scroll-bar" ).slider({
		slide: function( event, ui ) {
			if ( scrollContent.width() > scrollPane.width() ) {
				scrollContent.css( "margin-left", Math.round(
					ui.value / 100 * ( scrollPane.width() - scrollContent.width() )
				) + "px" );
			} else {
				scrollContent.css( "margin-left", 0 );
			}
		}
	});
	
	//append icon to handle
	var handleHelper = scrollbar.find( ".ui-slider-handle" )
	.mousedown(function() {
		scrollbar.width( handleHelper.width() );
	})
	.mouseup(function() {
		scrollbar.width( "100%" );
	})
	.append( "<span class='ui-icon ui-icon-grip-dotted-vertical'></span>" )
	.wrap( "<div class='ui-handle-helper-parent'></div>" ).parent();
	
	//change overflow to hidden now that slider handles the scrolling
	scrollPane.css( "overflow", "hidden" );
	
	//size scrollbar and handle proportionally to scroll distance
	function sizeScrollbar() {
		var remainder = scrollContent.width() - scrollPane.width();
		var proportion = remainder / scrollContent.width();
		var handleSize = scrollPane.width() - ( proportion * scrollPane.width() );
		scrollbar.find( ".ui-slider-handle" ).css({
			width: handleSize,
			"margin-left": -handleSize / 2
		});
		handleHelper.width( "" ).width( scrollbar.width() - handleSize );
	}
	
	//reset slider value based on scroll content position
	function resetValue() {
		var remainder = scrollPane.width() - scrollContent.width();
		var leftVal = scrollContent.css( "margin-left" ) === "auto" ? 0 :
			parseInt( scrollContent.css( "margin-left" ) );
		var percentage = Math.round( leftVal / remainder * 100 );
		scrollbar.slider( "value", percentage );
	}
	
	//if the slider is 100% and window gets larger, reveal content
	function reflowContent() {
			var showing = scrollContent.width() + parseInt( scrollContent.css( "margin-left" ), 10 );
			var gap = scrollPane.width() - showing;
			if ( gap > 0 ) {
				scrollContent.css( "margin-left", parseInt( scrollContent.css( "margin-left" ), 10 ) + gap );
			}
	}
	
	//change handle position on window resize
	$( window ).resize(function() {
		resetValue();
		sizeScrollbar();
		reflowContent();
	});
	//init scrollbar size
	setTimeout( sizeScrollbar, 10 );//safari wants a timeout
});

