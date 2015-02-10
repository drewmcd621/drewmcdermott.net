function getSelector()
{
//Get pathname of current window
var pathname = window.location.pathname;

//Get text between the first and second slash
var start = pathname.indexOf("/"); //Should be 0
var postslash = pathname.substring(start+1);
var end = postslash.indexOf("/") + 1; 

var res = '';
if(end < 1)
{
	res = pathname.substring(start);
}
else
{
	res = pathname.substring(start, end);
}
return res;
}

jQuery(document).ready(function($) 
{
	var sel = getSelector();
	
	$("#navbar").find("a[href='" + sel + "']").parent().addClass( 'active');

});