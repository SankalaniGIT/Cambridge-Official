var xmlHttp;
var objId = '';

function AjaxSuggest(str,evt,file,obj_id) {

	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		  alert("Browser does not support HTTP Request");
		  return;
	}
	objId = obj_id;

	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
		
	if((charCode >= 37 && charCode <= 40) || charCode == 13){
		
	}else{
	
		var suggestionBox_header = document.getElementById('suggestionBox_header');
		var suggestionBox = document.getElementById('suggestionBox');
		
		if(str != '' && file != ''){
			url= file + '?str=' + str;			
			xmlHttp.onreadystatechange = AjaxSuggestStateChanged;	
			xmlHttp.open("GET",url,true);
			xmlHttp.send(null);
	
		}else{
			suggestionBox_header.style.display = 'none';
			suggestionBox.innerHTML = '';	
			suggestionBox.style.display = 'none';			
		}
	}
	
}

function AjaxSuggestStateChanged() 
{ 
	var suggestionBox = document.getElementById('suggestionBox');
	
	if(xmlHttp.readyState < 4 )	{
		suggestionBox.style.display = 'block';			
    	suggestionBox.innerHTML = "<img src='images/indicator.gif' width='16' height='16' border='0' align='absmiddle' /> Loading...";
	}else{
		suggestionBox.innerHTML = '';
		suggestionBox.style.display = 'none';
	}
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") { 
		var response = xmlHttp.responseText;
	//	alert(response);
		
		var suggestionBox_header = document.getElementById('suggestionBox_header');
		var suggestionBox = document.getElementById('suggestionBox');		
		
		z = 2;
		
		if(response != 'no'){
			suggestionBox_header.style.display = 'block';
			suggestionBox.style.display = 'block';					
		
			var TB_str = '';		
				  
			TB_str += '<table id="suggestion_box_tab" width="100%" border="0" cellspacing="0" cellpadding="0">';
			TB_str += '<tr style="display: none;">'+
						'<th height="25">Reg No</th>'+
						'<th height="25">Name</th>'+
						'<th height="25">Date</th>'+
					  '</tr>';
			TB_str += '<tr style="display: none;">'+
						'<td height="5" colspan="3" style="height: 5px;"></td>'+
					  '</tr>';
			
			var responseArr = response.split('~/~');
			
			for(var x=0;x<responseArr.length;x++){
							
				var split_str 	= responseArr[x].split('~');
				var id 	= split_str[0];
				var col1 = split_str[1];									
				var col2 = split_str[2];
				var col3 = split_str[3];
		
				TB_str += '<tr onclick="javascript:SelectItem(\'' + id + '\');">'+
							'<td valign="top"><input type="hidden" id="id_' + x + '" value="' + id + '" />' + col1 + '</td>'+
							'<td valign="top">' + col2 + '</td>'+
							'<td valign="top">' + col3 + '</td>'+
						  '</tr>';
			
			}			
			TB_str += '</table>';
			
			suggestionBox.innerHTML = TB_str;			
			
			}else{
				suggestionBox_header.style.display = 'none';
				suggestionBox.innerHTML = '';
				suggestionBox.style.display = 'none';						
			}
	}
}

function SelectItem(id){

	window.location.href = window.location.href + '&id=' + id;
	
	CloseSuggestionBox();	
}

function CloseSuggestionBox(){
	var suggestionBox = document.getElementById('suggestionBox');
	var suggestionBox_header = document.getElementById('suggestionBox_header');
	
	$('#suggestionBox').fadeOut('slow', function() {
   	// Animation complete.
  	});
  	$('#suggestionBox_header').fadeOut('slow', function() {
   	// Animation complete.
  	});
  	
  	// Enable form submit
	document.forms[0].onsubmit = function(){
		return true;
	};
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
