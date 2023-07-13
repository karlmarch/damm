/************************************
COPYRIGHT 2005 EMARK SOLUTIONS PTY. LTD. 
ALL RIGHTS RESERVED.
*************************************/

// JScript File
function showHide(divID, imgID)
{
	var div = document.getElementById(divID).style;
	var img = document.getElementById(imgID);
	
	if (div.display == "block")
	{
		div.display = "none";
		img.src = "/eMark/Static/DOC/Images/expand.gif";
	} 
	else
	{
		div.display = "block";
		img.src = "/eMark/Static/DOC/Images/shrink.gif";
	}
	
	return;
	
}

function expandTab(divID, imgID)
	{
	var div = document.getElementById(divID).style;
	var img = document.getElementById(imgID);

	if (div.display == "block")
	{
	div.display = "none";
	img.src = "/Static/CRM/Images/more.gif";
	}
	else
	{
	div.display = "block";
	img.src = "/Static/CRM/Images/less.gif";
	}

	return;

	}

function showPage(divID)
{
	var div = document.getElementById(divID).style;
	
}

function highlightToday(today)
{
	try 
	{	
		var tdDate = document.getElementById('td' + calDate);
		
		tdDate.style.background = '#aaa';
	}
	catch(e)
	{
		// No date? shouldnt get here
	}
	
}


function highlightCalender(calDate, desc, link)
{
	
	try 
	{
		var cDate = document.getElementById('date' + calDate);	
		
		cDate.style.color = 'black';
		cDate.style.textDecoration = 'underline';
		cDate.title = desc;
		cDate.href = link;
		
	}
	catch(e)
	{
		// No date? shouldnt get here
	}
	
}

function highlight(divID, divNUM)
{
	var div = document.getElementById(divID).style;
	
	//clear rest of hightlights
	var catID = divID;
	var i = 1;
	
	while(i < divNUM + 1)
	{
		catID = catID.substring(0, catID.length - 1) + i;
		document.getElementById(catID).style.background = "none";
		document.getElementById(catID).style.fontStyle = "normal";
		i++;
	}
	
	div.background = "#e1bdbd";
	div.fontStyle = "italic";
	
	return;
	
}

function hideSearch()
{
	var object = document.getElementById("search_table").style;
	var btn = document.getElementById("search_tab-btn");
	
	if(object.display == "block")
	{
		object.display = "none";
		btn.innerHTML = "Show Search Options";
	} 
	else
	{
		object.display = "block";
		btn.innerHTML = "Hide Search Options";
	}
	
}

function opacity(elementID, startOpacity, endOpacity, time) 
{
	
	var speed = Math.round(time / 100);
	var timer = 0;
	var i;

	if(startOpacity > endOpacity) 
	{
		for(i = startOpacity; i >= endOpacity; i--) 
		{
			setTimeout("opacityShift(" + i + ",'" + elementID + "')",(timer * speed));
			timer++;
		}
		if(endOpacity == 0)
		{
			setTimeout("switchDisplay(" + "'" + elementID + "'" + ")", (timer * speed));
			
		}
	} 
	else if(startOpacity < endOpacity)
	{
		if(startOpacity == 0)
		{
			document.getElementById(elementID).style.display = 'block';
		}
		for(i = startOpacity; i <= endOpacity; i++)
		{
			setTimeout("opacityShift(" + i + ",'" + elementID + "')",(timer * speed));
			timer++;
		}
		
	}
}

function opacityShift(opacity, elementID) 
{
	var object = document.getElementById(elementID).style;
	object.opacity = (opacity / 100);
	object.MozOpacity = (opacity / 100);
	object.KhtmlOpacity = (opacity / 100);
	object.filter = "alpha(opacity=" + opacity + ")";
}

function switchVisibility(elementID)
{
	var object = document.getElementById(elementID).style;
	
	if(object.visibility == "visible")
	{
		object.visibility = "hidden";
	} 
	else
	{
		object.visibility = "visible";  
	} 
}

function switchDisplay(elementID)
{
	var object = document.getElementById(elementID).style;
	
	if(object.display == "block")
	{
		object.display = "none";
	} 
	else
	{
		object.display = "block";  
	} 
}

function changeLabel(text, label)
{
	
	var label = document.getElementById(label);
	
	label.innerHTML = text;
	
}

function switchToEdit()
{
	var descT = document.getElementById("descText").style;
	var descU = document.getElementById("descEdit").style;
	
	var dispnameT = document.getElementById("dispnameText").style;
	var dispnameU = document.getElementById("dispnameEdit").style;
	
	var categoryT = document.getElementById("categoryText").style;
	var categoryU = document.getElementById("categoryEdit").style;
	
	var keywordT = document.getElementById("keywordText").style;
	var keywordU = document.getElementById("keywordEdit").style;
	
	var submitB = document.getElementById("submitButton").style;
	
	if(descT.display == "block")
	{
	
		descT.display = "none";
		opacityShift("0", "descText");
		opacityShift("0", "descEdit");
		opacity("descEdit", 0, 100, 500);
		
		dispnameT.display = "none";
		opacityShift("0", "dispnameText");
		opacityShift("0", "dispnameEdit");
		opacity("dispnameEdit", 0, 100, 500);
		
		categoryT.display = "none";
		opacityShift("0", "categoryText");
		opacityShift("0", "categoryEdit");
		opacity("categoryEdit", 0, 100, 500);
		
		keywordT.display = "none";
		opacityShift("0", "descText");
		opacityShift("0", "descEdit");
		opacity("keywordEdit", 0, 100, 500);
		
		opacityShift("0", "submitButton");
		opacity("submitButton", 0, 100, 500);
				
	} else {
		
		opacity("descText", 0, 100, 500);
		descU.display = "none";
		
		opacity("dispnameText", 0, 100, 500);
		dispnameU.display = "none";
		
		opacity("categoryText", 0, 100, 500);
		categoryU.display = "none";
		
		opacity("keywordText", 0, 100, 500);
		keywordU.display = "none";
		
		submitB.display = "none";
	}
}

function switchToEditQuick()
{
	var descT = document.getElementById("descText").style;
	var descU = document.getElementById("descEdit").style;
	
	var dispnameT = document.getElementById("dispnameText").style;
	var dispnameU = document.getElementById("dispnameEdit").style;
	
	var categoryT = document.getElementById("categoryText").style;
	var categoryU = document.getElementById("categoryEdit").style;
	
	var keywordT = document.getElementById("categoryText").style;
	var keywordU = document.getElementById("categoryEdit").style;
	
	var submitB = document.getElementById("submitButton").style;
	
	if(descT.display == "block")
	{
		descT.display = "none";
		descU.display = "block";
		
		dispnameT.display = "none";
		dispnameU.display = "block";
		
		categoryT.display = "none";
		categoryU.display = "block";
		
		submitB.display = "block";
		
	} else {
	
		descT.display = "block";
		descU.display = "none";
		
		dispnameT.display = "block";
		dispnameU.display = "none";
		
		categoryT.display = "block";
		categoryU.display = "none";
		
		submitB.display = "none";
	}
}

function displayPopup(pName, dName)
{
	var popup = document.getElementById(pName).style;
	var disableBox = document.getElementById(dName).style;

	if(popup.display == "none")
	{
		opacityShift("0", pName);
		//disableBox.display = "block";
		opacity(pName, 0, 100, 500);
		
	} else {
		//disableBox.display = "none";
		opacity(pName, 100, 0, 500);
	}
	
}

function displayPopupNoFade(pName, dName)
{
	var popup = document.getElementById(pName).style;
	var disableBox = document.getElementById(dName).style;

	if(popup.display == "none")
	{
		//opacityShift("0", pName);
		disableBox.display = "block";
		popup.display = "block";
		//opacity(pName, 0, 100, 500);
		
	} else {
		
		popup.display = "none";
		disableBox.display = "none";
		//opacity(pName, 100, 0, 500);
	}
}
	
function highlightRed(objName)
{
	var inputBox = document.getElementById(objName).style;
	
	inputBox.borderColor = "#aaa";
	inputBox.background = "#fcfcfc";
	
}

function unhighlightRed(objName)
{
	var inputBox = document.getElementById(objName).style;
	
	inputBox.borderColor = "#ccc";
	inputBox.background = "white";
	
}

function switchDiv(showDiv, hideDiv)
{
	var show = document.getElementById(showDiv).style;
	var hide = document.getElementById(hideDiv).style;
		
	hide.display = "none";
	show.display = "block";
	
}

function calendar_onclick( oCal, obj, sAnchor )
{
	oCal.select( obj, sAnchor,'dd/MM/yyyy' ); 
	return false;
}

