/************************************
COPYRIGHT 2005 EMARK SOLUTIONS PTY. LTD. 
ALL RIGHTS RESERVED.
*************************************/

// Set a flag if the browser is using IE6.
//var isIE6 = navigator.userAgent.toLowerCase().indexOf('msie 6') != -1;

// 2020-12-14 SC: Implementation of global "IE" flag.
var isIE = navigator.userAgent.indexOf("MSIE ") > -1 || navigator.userAgent.indexOf("Trident/") > -1;

// 2021-01-28 SC: Global flag to track which is the current step indicator for any wizard forms with tabs.
var formStepIndicator = 0; 

// This is the iframe written to post back javascript errors to our error reporting mechanism.
//if (!isIE6)
//    document.write('<iframe id="idErrorReportingFrame" style="display:none;" src="' + SiteBasePath + 'notexist.html"></iframe>');

// This is the error handler function.
// Dependencies: 'SiteBasePath' variable set in the XSLT template.

window.onerror = function(msg, url, linenumber)
{
	// If we're in developer mode, just write out the line number etc to an alert box.
	if (getCookie('DebugLevel') == '1')
		alert('Javascript Error: ' + msg + '\nLine Number: '+linenumber + '\nURL: ' + url);
/*
	else if (!isIE6)
	{
		// Otherwise hide the error and submit an error report.
		var sURL = SiteBasePath + 'Script/SEC/Error-JS.asp?ErrorURL=' + escape(url) + '&ErrorLineNo=' + escape(linenumber) + '&ErrorMsg=' + escape(msg);
		document.getElementById('idErrorReportingFrame').src = sURL;
	}
*/
	this.returnValue = true;
	return true;
}

window.onload = body_onload_global;

function body_onload_global()
{
	if ( bPlaceFocus ) 
		placeFocus();
	
	try
	{
		body_onload();
	}
	catch(e)
	{
	}
}

function fixcode(textobj)
{
	var s = textobj.value;
 
	// Codes can be found here:
	// http://en.wikipedia.org/wiki/Windows-1252#Codepage_layout
	s = s.replace( /\u2018|\u2019|\u201A|\uFFFD/g, "'" );
	s = s.replace( /\u201c|\u201d|\u201e/g, '"' );
	s = s.replace( /\u02C6/g, '^' );
	s = s.replace( /\u2039/g, '<' );
	s = s.replace( /\u203A/g, '>' );
	s = s.replace( /\u2013/g, '-' );
	s = s.replace( /\u2014/g, '--' );
	s = s.replace( /\u2026/g, '...' );
	s = s.replace( /\u00A9/g, '(c)' );
	s = s.replace( /\u00AE/g, '(r)' );
	s = s.replace( /\u2122/g, 'TM' );
	s = s.replace( /\u00BC/g, '1/4' );
	s = s.replace( /\u00BD/g, '1/2' );
	s = s.replace( /\u00BE/g, '3/4' );
	s = s.replace(/[\u02DC|\u00A0]/g, " ");
 
	textobj.value = s;
}

function javascriptString( str )
{
  var sTemp = str.replace( /\\/g, '\\\\');
  return sTemp.replace( /\'/g, '\\\'');
}

var bPlaceFocus = true;
function placeFocus() 
{
	var j, i, field;

	if (document.forms.length > 0)
		for ( j = 0; j < document.forms.length; j++ )
			for (i = 0, field = document.forms[j]; i < field.length; i++) 
				if ( !field.elements[i].disabled && field.elements[i].style.display != "none" && field.elements[i].style.visibility == "visible" )
					switch ( field.elements[i].type )
					{
						case 'text':		;
						case 'textarea':	;
						case 'password':	field.elements[i].focus();
											return;
					}
}

function createWindow(URL, name, options)
{
	var j = window.open(URL, name, options); 
	j.focus();
}

function closeWindow(bRefreshParent)
{
	if (bRefreshParent)
		window.opener.location.reload();
	
	window.close();
}

// Returns true if the given string contains no printable characters.
function isStringEmpty(str)
{
	if (!str) return true;
	
	return trim(str).length <= 0;
}

// Focus's the browser on the specified object.
function objFocus(obj)
{
	//if ()// && obj.style.display != "none", obj.style.visibility == "visible"
	//{
		if ( obj.length > 1)
			for( var i = 0; i < obj.length; i++ )
			{
				if ( obj[i].type != "hidden" && !obj[i].disabled && obj[i].style.display != "none" )
				{
					objFocus( obj[i] );
					break;
				}
			}
		else ( obj.type != "hidden" && !obj.disabled && obj.style.display != "none" )
		{
			try
			{
				// attempt to reset tabs
				focusFormTabElement(obj);

				if ( obj.focus )
					obj.focus();
				if ( obj.select )
				//if (obj.type == "text" || obj.type == "textarea" || obj.type == "password")
					obj.select();
			}
			catch (ex)
			{
				;
			}
		}
	//}
}

// pass in an element, check if it is within a formtab, and reset the tab visibilities.
function focusFormTabElement(el) {
	try{
		var eParent = closest(el, ".tab").parentNode;
		var tab = closest(el, ".tab");

		var tabList = document.getElementsByClassName("tab");
		if (tabList.length > 1) {
			for (var i = 0; i < tabList.length; i++) {

				// found the current tab so refresh the global step indicator.
				if (tabList[i].id == tab.id) {
					formStepIndicator = i;
				}
			}

			RefreshTabs();

		}
	}
	catch (e) {
		//alert(e);
	}
}

function RefreshTabs() {
	var tabList = document.getElementsByClassName("tab");

	//do xyz with the global formStepIndicator
	for (var i = 0; i < tabList.length; i++) {

		if (tabList[i].style.display == "block") {
			tabList[i].style.display = "none";
		}

		if (i == formStepIndicator) {
			//alert("we found ya");
			tabList[i].style.display = "block";

			// work out what number tab it is, so we can set the step indicator.
			refreshStepIndicator(i);
		}

		// if the current tab, find the submit button and attempt to submit form.
		if (i == tabList.length) {
			for (var l = 0; l < myFormElements.length; l++) {
				if (myFormElements[l].type == "submit")
					myFormElements[l].click();
			}

		}
	}
}

function RefreshTabsWithIncrement(n) {
	formStepIndicator = n;

	RefreshTabs();
}


function refreshStepIndicator(n) {
	var i, x = document.getElementsByClassName("step");
	for (i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" active", "");
	}

	x[n].className += " active";
}

function initialiseFormTabSteps(el) {
	var eParent = el.parentNode;
	var tabList = eParent.getElementsByClassName("tab");
	for (var i = 0; i < tabList.length; i++) {
		var childNode = document.createElement("a");
		childNode.setAttribute("class", "step");

		if (tabList[i].getAttribute("data")) {
			//childNode.setAttribute("href", "#" + tabList[i].getAttribute("data" ));
			//childNode.setAttribute("onclick", "tab_onclick( '" + tabList[i].getAttribute("data") + "' )");
			childNode.innerHTML = tabList[i].getAttribute("data");
		}
		else {
			childNode.innerHTML = "&nbsp;";
		}

		//current one.
	//	if (i == formStepIndicator)
	//		fixStepIndicator(eParent, formStepIndicator);

		childNode.setAttribute("id", i + 1);
		el.appendChild(childNode);
	}
}

// Returns true if the given object contains only alpha-numeric chars.
function validateNumeric(obj, sMsg)
{
	return validateRegExp(obj, /^-*(\d+,)*\d+$/, sMsg);
}

// Returns true if the given object contains a guid.
function validateGUID(obj, sMsg)
{
	return validateRegExp(obj, /^\{*[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}\}*$/, sMsg);
}

// Returns true if the given object contains a valid floating point number.
function validateFloat(obj, sMsg)
{
	return validateRegExp(obj, /^-*(\d+,)*\d+(\.\d+)?$/, sMsg);
}

// Returns true if the given object contains valid text.
function validateText( obj, sMsg )
{
	return validateRegExp( obj, /[\w]/, sMsg );
}

// Returns true if the given object contains a valid floating point number.
function validateEmail(obj, sMsg)
{
	return validateRegExp(obj, /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,15}|[0-9]{1,3})(\]?)$/, sMsg);
}

function validateURL( obj, sMsg )
{
	return validateRegExp( obj, /^https?:\/\/([a-zA-Z0-9\-]*\.)*[a-zA-Z0-9\-]+(:[0-9]+)?(\/|(\/([a-zA-Z0-9\-_\.]+\/)*[a-zA-Z0-9\-_\.]*((\?[a-zA-Z0-9\-%]+(=[a-zA-Z0-9\-%]*)?){1}(&[a-zA-Z0-9\-%]+(=[a-zA-Z0-9\-%]*)?)*)?)?)?$/, sMsg )
}

function validateRegExp(obj, regExp, sMsg)
{
	if ( obj ) 
	{
		// Check that it isn't the null value;
		var sValue = new String( obj.value );
		
		if ( !(sValue.match( regExp, 'i' ) ) )
		{
			if ( sMsg && sMsg.length > 0 ) 
			{
				//objFocus( obj );				
				alert( sMsg );
			}
			return false;
		}
	}
	return true;
}

function ValidateControl( obj, bIsRequired, sDatType, sObjNarrative )
{
	var bErr = false,
		sValue = "",
		i, strarray, sPickNar, objType;
		
	objType = ( obj.type ? obj.type : ( obj.length > 1 ? obj[0].type : null ) )

	// Get the value from the object.
	switch ( objType )
	{

		case 'select-one':			sValue = ( obj.selectedIndex >= 0 ? obj.options[obj.selectedIndex].value : '' );
									  sPickNar = 'Please select ' + selectSingular( sObjNarrative ) + ' ';
									  break;
									
		case 'text': ;
		case 'number': ;
		case 'email':;
		case 'password':			;
		case 'hidden':				;
		case 'textarea':			fixcode(obj);   // Replace smart quotes and some extended symbol characters.
									obj.value = trim(obj.value);    // trim away any leading/trailing spaces.
									sValue = obj.value;
									sPickNar = 'Please enter a ';
									break;

		case 'radio':				if (obj.length > 1)
									{
										for (i = 0; i < obj.length; i++)
											if (obj[i].checked)
											{
												sValue = obj[i].value;
												break;
											}
									}
									else if (obj.checked)
										sValue = obj.value;
									
									sPickNar = 'Please select ' + selectSingular( sObjNarrative ) + ' ';
									break;
									
		case 'checkbox':			if (obj.length > 1)
									{
										for (i = 0; i < obj.length; i++)
											if (obj[i].checked)
												sValue = sValue + (i > 0 ? ', ' : '' ) + obj[i].value;
									}
									else if (obj.checked)
										sValue = obj.value;
									
									sPickNar = 'Please select ' + selectSingular( sObjNarrative ) + ' ';
									break;

		case 'select-multiple':		for (i = 0; i < obj.options.length; i++)
										if ( obj.options[i].selected )
											sValue = sValue + (sValue.length > 0 ? ', ' : '' ) + obj.options[i].value;
									
									sPickNar = 'Please select ' + selectSingular( sObjNarrative ) + ' ';
									break;
									
		case 'file':				sValue = obj.value;
									sPickNar = 'Please use the browse button to select ' + selectSingular( sObjNarrative ) + ' ';
									break;
								
		default:					alert( "Unknown Type on Control: '" + obj.name + "' - '" + objType + "'" );
									//alert( "Unknown Control Type: '" + obj.type + "' (document." + obj.form.name + "." + obj.name + ")" );
									return false;
	}
	
	// Abort as successful if object is empty but optional anyway.
	if ( !bIsRequired && isStringEmpty( sValue ) )
	{
		return true;
	}

	// Evaluate the data against 
	switch ( sDatType )
	{
		case 'text':		bErr = isStringEmpty( sValue );
							break;
							
		case 'date':		bErr = !getDate( sValue );
							break;

		case 'time':		bErr = !getTime( sValue, new Date )
							break;
															
		case 'currency':	bErr = !sValue.match( /^-?(\d+,)*\d+\.\d{2,2}$/, 'i' );
							break;
		
		// Accept currency and number values
		case 'money':		bErr = !sValue.match( /^-?((\d+,)*(\d+\.\d{1,2})|(\d+))$/, 'i' );
							break;

		case 'decimal':		bErr = !sValue.match( /^-?(\d+,)*\d+(\.\d+)?$/, 'i' );
							break;
							
		case 'number':		bErr = !sValue.match( /^-?(\d+,)*\d+$/, 'i');
							break;
							
		case 'percentage':	bErr = !sValue.match( /^-?((\d{1,3}\.\d{1,2})|(\d{1,3}))$/, 'i' );
							break;

		case 'email':		bErr = !sValue.match( /^([^\x00-\x1f\x80-\xff\x7f<>\(\)\\,;:""@]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,15}|[0-9]{1,3})(\]?)$/, 'i' );
							break;

		case 'url':			bErr = !sValue.match( /^https?:\/\/([a-zA-Z0-9\-]*\.)*[a-zA-Z0-9\-]+(:[0-9]+)?(\/|(\/([a-zA-Z0-9\-_\.]+\/)*[a-zA-Z0-9\-_\.]*((\?[a-zA-Z0-9\-%]+(=[a-zA-Z0-9\-%]*)?){1}(&[a-zA-Z0-9\-%]+(=[a-zA-Z0-9\-%]*)?)*)?)?)?$/, 'i' );
							break;
							
		case 'phone':		sValue = sValue.replace(/[ -\(\)\.]*/ig, '');
							bErr = !sValue.match( /(^0011)|(^[+])|(^1300\d{6}$)|(^1800|1900|1902\d{6}$)|(^0[2|3|7|8]{1}[0-9]{8}$)|(^13\d{4}$)|(^04\d{2,3}\d{6}$)/, 'i' );
							break;

		case 'ipv4':        var iparray = sValue.split('.');

							if ( iparray.length != 4 )
							{
								bErr = true;
								break;
							}
							bErr = false;
							for ( var ipvi = 0; ipvi < iparray.length; ipvi++ )
							{
								if ( !( parseInt( iparray[ipvi], 10 ) >= 0 && parseInt( iparray[ipvi], 10 ) <= 255 ) )
								{
									bErr = true;
									break;
								}
							}

							break;

		default:			alert( "Unknown Data Type: '" + sDatType + "' (document." + obj.form.name + "." + obj.name + ")");
							return false;
	}
	
	// Handle the error situation.
	if ( bErr )
	{
		objFocus( obj );
		alert( sPickNar + sObjNarrative );
		return false;
	}
	return true;
}

function selectSingular( noun )
{
	switch ( noun.charAt(0) )
	{
		case 'a':	;
		case 'A':	;
		case 'e':	;
		case 'E':	;
		case 'i':	;
		case 'I':	;
		case 'h':	;
		case 'H':	;
		case 'o':	;
		case 'O':	;
		case 'u':	;
		case 'U':	return 'an';
	}
	return 'a';
}

function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=");
  if (c_start!=-1)
	{
	c_start=c_start + c_name.length+1;
	c_end=document.cookie.indexOf(";",c_start);
	if (c_end==-1) c_end=document.cookie.length;
	return unescape(document.cookie.substring(c_start,c_end));
	}
  }
  return "";
}

// Trims any left & right whitespace.
function trim(s)
{
	if (!s || s.length == 0) return '';
	
	var l=0; 
	var r=s.length - 1;
	
	while(l < s.length && s.substr(l, 1) == ' ')
		l++; 
	
	while(r > l && s.substr(r, 1) == ' ')
		r-=1;	
	
	return s.substring(l, r+1);
}

// This function will insert a CSS file into the head, from within a standard page template
function loadjscssfile(filename, filetype)
{
	if (filetype=="js")
	{ //if filename is a external JavaScript file
		var fileref=document.createElement('script')
		fileref.setAttribute("type","text/javascript")
		fileref.setAttribute("src", filename)
	}
	else if (filetype=="css")
	{ //if filename is an external CSS file
		var fileref=document.createElement("link")
		fileref.setAttribute("rel", "stylesheet")
		fileref.setAttribute("type", "text/css")
		fileref.setAttribute("href", filename)
	}
	if (typeof fileref!="undefined")
	document.getElementsByTagName("head")[0].appendChild(fileref)
}

function refreshCAPTCHACode(objImage, objField)
{
   if (!objImage)
	return false;
	
   var src = objImage.src;
   var pos = src.indexOf('?');
   if (pos >= 0) {
	  src = src.substr(0, pos);
   }
   var date = new Date();
   objImage.src = src + '?v=' + escape(date.getTime());
   
   if (!objField)
	return false;
	
   objField.value = '';
   objFocus(objField);
	
   return false;
}


function keyhandler_alphabetical(e)
{
	var keynum;
	var keychar;
	var numcheck;

	if(window.event) // IE
		keynum = e.keyCode;
	else if(e.which) // Netscape/Firefox/Opera
		keynum = e.which;

	keychar = String.fromCharCode(keynum);
	numcheck = /[a-zA-Z]/;
	return numcheck.test(keychar);
}
function keyhandler_numeric(e)
{
	var keynum;
	var keychar;
	var numcheck;

	if(window.event) // IE
		keynum = e.keyCode;
	else if(e.which) // Netscape/Firefox/Opera
		keynum = e.which;

	keychar = String.fromCharCode(keynum);
	numcheck = /\d/;
	return numcheck.test(keychar);
}
function keyhandler_textNoComma(e)
{
	var keynum;
	var keychar;
	var numcheck;

	if(window.event) // IE
		keynum = e.keyCode;
	else if(e.which) // Netscape/Firefox/Opera
		keynum = e.which;

	keychar = String.fromCharCode(keynum);
	numcheck = /\,/;
	return !numcheck.test(keychar);
}


function bindEvent(el, eventName, eventHandler) {
	if (el.addEventListener) {
		el.addEventListener(eventName, eventHandler, false);
	} else if (el.attachEvent) {
		el.attachEvent('on' + eventName, eventHandler);
	}
}

function isJson(str) {
	try {
		JSON.parse(str);
	} catch (e) {
		return false;
	}
	return true;
}


function showErrorMessage(xhr, status) {
	if (xhr.responseText != "") {
		var errMsg;

		try {
			if ($(xhr.responseText).find(".clsErrorText").length > 0) {
				errMsg = $(xhr.responseText).find(".clsErrorText").text().replace(/<!--[\s\S]*?-->/g, "");
			}
			else {
				errMsg = $(xhr.responseText).find(".clsInfoText").text().replace(/<!--[\s\S]*?-->/g, "");
			}

		}
		catch (e) {
			alert("An error has occurred however no message was provided.");
		}

		if (errMsg)
			alert(errMsg);
	}
}

function closest(el, selector) {
	var matchesFn;

	// find vendor prefix
	['matches', 'webkitMatchesSelector', 'mozMatchesSelector', 'msMatchesSelector', 'oMatchesSelector'].some(function (fn) {
		if (typeof document.body[fn] == 'function') {
			matchesFn = fn;
			return true;
		}
		return false;
	})

	var parent;

	// traverse parents
	while (el) {
		parent = el.parentElement;
		if (parent && parent[matchesFn](selector)) {
			return parent;
		}
		el = parent;
	}

	return null;
}

function hasClass(ele, cls) {
	return ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}
function addClass(ele, cls) {
	if (!hasClass(ele, cls)) ele.className += " " + cls;
}
function removeClass(ele, cls) {
	if (hasClass(ele, cls)) {
		var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
		ele.className = ele.className.replace(reg, ' ');
	}
}

function isTouchDevice() {
	return (('ontouchstart' in window) ||
		(navigator.maxTouchPoints > 0) ||
		(navigator.msMaxTouchPoints > 0));
}

function CountSpecialCharacters(str) {

	var regex = /[-!$ %^&* ()_ +| ~=`{}[:;<>?,.@#\]]/g;
	var numberOfMatches = 0;

	if (str.match(regex)) {
		numberOfMatches = parseInt(str.match(regex).length);
	}

	return numberOfMatches;
}

function CountNumbers(str) {

	var regex = /\d/g;
	var numberOfMatches = 0;

	if (str.match(regex)) {
		numberOfMatches = parseInt(str.match(regex).length);
	}

	return numberOfMatches;
}


function CountUppercaseCharacters(str) {

	var regex = /[A-Z]/g;
	var numberOfMatches = 0;

	if (str.match(regex)) {
		numberOfMatches = parseInt(str.match(regex).length);
	}

	return numberOfMatches;
}