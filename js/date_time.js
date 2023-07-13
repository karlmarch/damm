/************************************
COPYRIGHT 2005 EMARK SOLUTIONS PTY. LTD. 
ALL RIGHTS RESERVED.
*************************************/

// Accepts a date object and returns a yyyy-mm-dd formated date string.
function setDate( oDate )
{
	if ( oDate )
		return (  ( oDate.getDate() < 10 ? '0' : '' ) + oDate.getDate().toString(10) + '/' + ( ( oDate.getMonth() < 9 ? '0' : '' ) + ( oDate.getMonth() + 1 ).toString(10) ) + '/' + ( oDate.getYear() <= 999 ? '0' : '' ) + oDate.getYear().toString(10) );

	//( ( nHour < 10 ? '0' : '' ) + nHour.toString(10) + ':' + ( nMin < 10 ? '0' : '' ) + nMin.toString(10) );

	return null;
}

function setTime( oDate )
{
	if ( oDate )
		return ( ( oDate.getHours() <= 9 ? '0' : '' ) + oDate.getHours().toString(10) + ':' + ( oDate.getMinutes() < 9 ? '0' : '' ) + ( oDate.getMinutes() ).toString(10) );

	return null;
}

// Accepts the given string representation of a time, and returns a properly formatted 24 hr HH:MM string.
// If a date object is given, the time is set in the date object, and the object is returned instead.
// Returns null on parse error.
function getTime( sTime, oDate )
{
	var ary, sHour, sMin, nMD = 0;
	
	// Strip spaces.
	sTime = sTime.replace( " ", "" );

	// Replace any strange delimiters.
	sTime = sTime.replace( /[-,;\.]/, ":" );
	
	switch ( true )
	{
		// hh:mm
		case	( sTime.match( /^[0-2]?[0-9]:[0-5]?[0-9]([ap]m)?$/ ) != null ):
				ary		= sTime.split( ":" );
				sHour	= ary[ 0 ];
				sMin	= ary[ 1 ];
				nMD		= getMeridanFromString( ary[ 1 ] );
				break;

		// hh
		case	( sTime.match( /^[0-2]?[0-9]([ap]m)?$/ ) != null ):
				sHour	= sTime.substr( 0, 2 );
				sMin	= "0";
				nMD		= getMeridanFromString( sTime );
				break;

		// hhmm
		case	( sTime.match( /^[0-2][0-9][0-5][0-9]([ap]m)?$/ ) != null ):
				sHour	= sTime.substr( 0, 2 );
				sMin	= sTime.substr( 2, 2 );
				nMD		= getMeridanFromString( sTime );
				break;
		
		default:	return null;
	}
	
	var nHour, nMin, d = new Date();
	nHour = resolveStringToInt( sHour );
	nMin = resolveStringToInt( sMin );

	// Check for bounds issues.
	if ( isNaN( nHour ) || nHour < 0 || nHour > 23 )
		nHour = 0;
	if ( isNaN( nMin ) || nMin < 0 )
		nMin = 0;
	else if ( nMin > 59 )
		nMin = 59;

	// make changes according to the meridan.
	switch ( nMD )
	{
		case 1:	// am.
				if ( nHour == 12 )
					nHour = 0;
				break;
		case 2:	// pm.
				if ( nHour > 0 && nHour < 12 )
					nHour += 12;
				break;
	}
	
	// If a date object is specified, set the hour and minute into it, herwise return a string.
	if ( oDate )
	{
		oDate.setHours( nHour, nMin );
		return oDate;
	}
	return ( ( nHour < 10 ? '0' : '' ) + nHour.toString(10) + ':' + ( nMin < 10 ? '0' : '' ) + nMin.toString(10) );
}

// Searches the given string for am or pm.
// Returns:		0 = n found.
//				1 = am
//				2 = pm
function getMeridanFromString( sDate )
{
	if ( sDate.lastIndexOf( "am" ) > 0 )
		return 1;
	else if ( sDate.lastIndexOf( "pm" ) > 0 )
		return 2
	return 0;
}

// Returns Date object or NULL.
function getDate( sDate )
{
	var ary, sYear, sMonth, sDay;
	sDate = sDate.replace( " ", "" );
	switch ( true )
	{
		// British or US	dd/mm/yyyy or mm/dd/yyyy
		case	( sDate.match( /^[0-3]?[0-9]\/[0-3]?[0-9]\/\d{1,4}$/ ) != null ): 
				ary		= sDate.split( "/" );
				sYear	= ary[ 2 ];
				sMonth	= ary[ 1 ];
				sDay	= ary[ 0 ];
				break;
	
		// ISO	yyyymmdd
		case	( sDate.match( /^\d{4}[0-1][0-9][0-3][0-9]$/ ) != null ):
				sYear	= sDate.substr( 0, 4 );
				sMonth	= sDate.substr( 4, 2 );
				sDay	= sDate.substr( 6, 2 );
				break;
				
		// User friendly ISO	yyyy-mm-dd
		case	( sDate.match( /^\d{1,4}-[0-1]?[0-9]-[0-3]?[0-9]$/ ) != null ):
				ary		= sDate.split( "-" );
				sYear	= ary[ 0 ];
				sMonth	= ary[ 1 ];
				sDay	= ary[ 2 ];
				break;

		// User friendly ISO	yyyy.mm.dd
		case	( sDate.match( /^\d{2,4}\.[0-1]?[0-9]\.[0-3]?[0-9]$/ ) != null ):
				ary		= sDate.split( "." );
				sYear	= ary[ 0 ];
				sMonth	= ary[ 1 ];
				sDay	= ary[ 2 ];
				break;

		// User friendly ISO	yyyy/mm/dd
		case	( sDate.match( /^\d{2,4}\/[0-1]?[0-9]\/[0-3]?[0-9]$/ ) != null ):
				ary		= sDate.split( "." );
				sYear	= ary[ 0 ];
				sMonth	= ary[ 1 ];
				sDay	= ary[ 2 ];
				break;

				
		// British/US with dashes	dd-mm-yyyy or mm-dd-yyyy
		case	( sDate.match( /^\d{1,2}-[0-3]?[0-9]-\[0-3]?[0-9]{0,3}$/ ) != null ):
				ary		= sDate.split( "-" );
				sYear	= ary[ 2 ];
				sMonth	= ary[ 1 ];
				sDay	= ary[ 0 ];
				break;
			
		default:	return null;
	}
	var nDay, nMonth, nYear, d = new Date();
	nDay	= resolveStringToInt( sDay );
	nMonth	= resolveStringToInt( sMonth );
	nYear	= resolveStringToInt( sYear );

	// Check for indications of American format ( Day <-> Month ).
	if ( nDay > 0 && nDay <= 12 && nMonth > 12 && nMonth <= 31 )
	{
		var nTemp = nDay;
		nDay	= nMonth;
		nMonth	= nTemp;
	}
	
	// Detect and correct a two digit year.
	if ( nYear < 100 )
	{
		var nYearCurrent = d.getFullYear();
		
		if ( nYear > 0 && nYear < 50 )
			nYear += ( parseInt( ( nYearCurrent / 100 ), 10 ) * 100 );
		else if ( nYear >= 50 && nYear <= 99 )
			nYear += ( parseInt( ( nYearCurrent / 100 ) - 1, 10 ) * 100 );
	}

	// Check and correct obvious range errors.
	if ( isNaN( nYear ) || nYear <= 0 || nYear > 9999 )
		nYear = d.getFullYear();
	if ( isNaN( nMonth ) || nMonth <= 0 )
		nMonth = 1;
	else if ( nMonth > 12 )
		nMonth = 12;
	if ( isNaN( nDay ) || nDay <= 0 )
		nDay = 1;
	else if ( nDay > maxDayofMonth( nMonth-1, nYear ) )
		nDay = maxDayofMonth( nMonth-1, nYear );
	
	// Return the Date object.
	return new Date( nYear, nMonth-1, nDay );
}

// Accepts a string and resolves it to an integer.
function resolveStringToInt( sInt )
{
	sInt = sInt.replace( ' ', '' );
	while ( sInt.length > 1 && sInt.substr( 0, 1 ) == '0' )
		sInt = sInt.substr( 1 );
	return parseInt( sInt );
}

// returns the maximum day of the month (1-31) for the given month and year pair.
function maxDayofMonth( month, year )
{
	// This matrix stores the days in each month of the year.
	var monthDayMtx = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	
	if (month >= 0 && month < monthDayMtx.length)
	{
		if (month != 1)  //February
			return monthDayMtx[month];
		else	
			return monthDayMtx[month] + ((year % 4) > 0 ? 0 : 1);
	}
	return NaN;
}