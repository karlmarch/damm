var isLightbox;

function body_onload()
{
	objFocus( document.SearchForm.Keyword );
	isLightbox = document.getElementById("UseLightboxPopups").value;
}

function validateform( objform )
{
	var retVal = (
			ValidateControl( objform.StartDate, false, 'date', 'Start Date' )
			&& ValidateControl( objform.EndDate, false, 'date', 'End Date' )
		);
	if ( retVal )
		objform.btnSubmit.disabled = true;
	return retVal;
}
function print_onclick( url, objectid )
{
	var j = window.open( url + '?ObjectID=' + escape( objectid ), '', 'width=750,height=550,resizable=yes,scrollbars=yes,location=yes,menubar=yes,status=yes,toolbar=yes' );
	j.focus();
	return false;
}

function calendar_onclick( oCal, obj, sAnchor )
{
	oCal.select( obj, sAnchor,'dd/MM/yyyy' ); 
	return false;
}

function vendor_onclick(url)
{
	if (isLightbox == 1) {
		$.fancybox.open({
			src: url + '?HTML_returnFunc=form_vendorValue&Msg=' + escape('Please Search for the Required Manufacturer'),
			type: 'iframe',
			opts: {}
		});
	}
	else {
		var j = window.open(url + '?HTML_returnFunc=form_vendorValue&Msg=' + escape('Please Search for the Required Manufacturer'), '', 'width=800,height=500,resizable=yes,scrollbars=yes,location=no,menubar=no');
		j.focus();
	}

	return false;
}

function form_vendorValue(id,label)
{	
	document.SearchForm.VendorID.value = id;
	document.getElementById( 'idVendorLabel' ).innerHTML = label;
	document.getElementById('idVendorSelectionSelected').checked = true;

	if (isLightbox == 1)
		$.fancybox.close();
}

function VendorSelectionSelected_onclick( obj, url )
{
	obj.checked = true;
	vendor_onclick( url );
}

function VendorSelectionAll_onclick( obj )
{
	document.getElementById( 'idVendorHidden' ).value = '';
	document.getElementById( 'idVendorLabel' ).innerHTML = '(Click to Select a Manufacturer)';
}