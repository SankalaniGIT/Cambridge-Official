var xmlHttp;
var objId = '';

function AjaxDelete(file,obj_id) {

	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		  alert("Browser does not support HTTP Request");
		  return;
	}
	objId = obj_id;

	if(file != ''){
		var conf = window.confirm("Are you sure you want to delete this record ?");
		if(conf == true){
			url= file;			
			xmlHttp.onreadystatechange = AjaxDeleteStateChanged;	
			xmlHttp.open("GET",url,true);
			xmlHttp.send(null);
		}else{
			
		}
	}	
}

function AjaxDeleteStateChanged() 
{ 
	if(xmlHttp.readyState < 4 )	{
		$('#'+objId).html('Deleting...');
		$('#'+objId).addClass('delete_preloader');
	}else{
		
	}
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") { 
		var response = xmlHttp.responseText;
		
		if(response != "no"){			
			$('#'+objId).fadeOut('slow');
		}else{
			$('#'+objId).html('Unable to delete');
			$('#'+objId).addClass('warning');		
		}
	}
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	 {
	 // Firefox, Opera 8.0+, Safari
	 xmlHttp=new XMLHttpRequest();
	 }
	catch (e)
	 {
	 // Internet Explorer
	 try
	  {
	  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	  }
	 catch (e)
	  {
	  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
 }
return xmlHttp;
}
