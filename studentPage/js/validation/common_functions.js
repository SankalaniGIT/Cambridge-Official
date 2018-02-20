// Save :: Ctrl + S

var isCtrl = false;
document.onkeyup = function(e){
	if(e.which == 17){
		isCtrl=false;
	}
	
}
document.onkeydown = function(e){
	if(e.which == 17)
		isCtrl=true;
	if(e.which == 83 && isCtrl == true){
	//	alert(isCtrl);
		//run code for CTRL+S -- ie, save!		
		// Disable form submit	
		return false;
	}
	
} 

// NIC validation
function OnValidateNIC(val,evt){

	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;

	if(val.length > 9){
		if((charCode >= 37 && charCode <= 40) || charCode == 8){
			return true;
		}
		return false;
	}
	
	if((charCode >= 48 && charCode <= 57) || charCode == 88 || charCode == 86 || charCode == 8 || charCode == 46 || (charCode >= 37 && charCode <= 40)){
		return true;
	}else{
		return false;
	}		
}

function ValidateNIC(obj){
	var nic_no = obj.value;
	var len = nic_no.length;
	if(nic_no != ''){
		if(len != 10 || (nic_no.substr(len-1) != 'V' && nic_no.substr(len-1) != 'X') || isNaN(nic_no.substr(0,len-1))){
			alert('Invalid NIC number !');
		}
	}
}

// Email validation
function ValidateEmail(val){	
	
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(val!=''){
		if(reg.test(val) == false) {   
   			alert('Invalid E-mail Address !');
		}
	}
}


function NumOnly(obj,evt){
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
		
	if((charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 46 || (charCode >= 37 && charCode <= 40)){
		return true;
	}else{
		return false;
	}	
}

function NumFormat(obj,dec){	
	if(isNaN(obj.value) == true){
		obj.value = '';
	}else{	
		obj.value = addCommas(parseFloat(obj.value).toFixed(dec));
	}
}

function RoundNum(obj,dec){	
	if(isNaN(obj.value) == true){
		obj.value = '';
	}else{	
		obj.value = parseFloat(obj.value).toFixed(dec);
	}
}

function DecimalOnly(obj,place){	
		
	if(!isNaN(obj.value)){
		obj.value = parseFloat(obj.value).toFixed(place);
		
	}else{
		obj.value = parseFloat('0').toFixed(place);
		
	}	
}

function DataIntOnly(evt){
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	//	alert(charCode);
	if((charCode >= 48 && charCode <= 57) || (charCode >= 96 && charCode <= 105) || charCode == 8 || charCode == 9 || charCode == 46 || charCode == 78 || charCode == 80 || (charCode >= 37 && charCode <= 40)){
		return true;
	}else{
		return false;
	}	
}

function MaxNum(obj,max_val){

	if(isNaN(obj.value)){
		obj.value = '';
		obj.focus();
	}
	if(parseInt(obj.value) > parseInt(max_val)){
		alert('Maximum allowed number is ' + max_val);
		obj.value = '';
		obj.focus();		
	}
}

function ChangeVisibility(obj,val1,val2,ids,opt){
	var id_array = ids.split(',');
	for(var i=0;i<id_array.length;i++){
		var id = id_array[i];
		
		if(obj.value == val1){
			if(opt == 'display')
			document.getElementById(id).style.display = 'none';
			else if(opt == 'visibility')
			document.getElementById(id).style.visibility = 'hidden';
	
		}else if(obj.value == val2){
			if(opt == 'display')
			document.getElementById(id).style.display = 'block';
			else if(opt == 'visibility')
			document.getElementById(id).style.visibility = 'visible';
		}
	}
}

function DisplaySection(obj,val,target_id){
	if(val == 'show'){		
		$('#'+target_id).slideDown('slow');		
		obj.onclick = function(){
			DisplaySection(obj,'hide',target_id);
		};
		obj.className = 'expand_section';
	}
	else if(val == 'hide'){
		$('#'+target_id).slideUp('slow');		
		obj.onclick = function(){
			DisplaySection(obj,'show',target_id);
		};
		obj.className = 'collapse_section';
	}
	
}

// Get Width, Height of the screen
function getWidthHeight(){
	var myWidth = 0, myHeight = 0;
  	if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
   		myWidth = window.innerWidth;
    	myHeight = window.innerHeight;
 	} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
   		myWidth = document.documentElement.clientWidth;
    	myHeight = document.documentElement.clientHeight;
  	} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    	myWidth = document.body.clientWidth;
    	myHeight = document.body.clientHeight;
  	}
  	return myWidth+'/'+myHeight;
}

// New Line to <br />
function nl2br_js(myString) {
	var regX = /\n/gi ;

	s = new String(myString);
	s = s.replace(regX, "<br /> \n");
	return s;
}

// Select Item with Arrow Keys
var z = 2;
function SelectItem_with_ArrowKeys(evt,obj,OPT){
	
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
		
	if(charCode == 40){
		try{
			if(z < obj.rows.length)
			z++;
		}catch(e){ }		
	}	
	else if(charCode == 38){
		if(z > 3)
		z--;
	}

	try{
		if(z > 2){
			obj.rows[z-1].style.backgroundColor = '#EEE';
		}
		for(var r=0;r<obj.rows.length;r++){
			if(r != z-1){
				obj.rows[r].style.backgroundColor = '';
			}
		}
	}catch(e){ }
	
	// If Enter Key
	if(charCode == 13){
		// Disable form submit
		document.forms[0].onsubmit = function(){
			return false;
		};
		try{	
			obj.rows[z-1].style.backgroundColor = '#F93';			
		//	var onclick_str = obj.rows[z-1].getAttribute('onclick');			
			var d = z-3;
					
			if(typeof(OPT) != 'undefined' && OPT != ''){			
				
				try{
					if(OPT == 'client'){
						document.getElementById('client_id').value = document.getElementById('id_' + d).value;
						document.getElementById('client_name').value = document.getElementById('col2_' + d).value;
					}else if(OPT == 'customer'){
						document.getElementById('customer_id').value = document.getElementById('id_' + d).value;
						document.getElementById('customer_name').value = document.getElementById('col2_' + d).value;
					}
					else if(OPT == 'sub_agent'){
						document.getElementById('sub_agent_id').value = document.getElementById('id_' + d).value;
						document.getElementById('sub_agent_name').value = document.getElementById('col2_' + d).value;
					}				
					else if(OPT == 'pp_no'){
						document.getElementById('pp_no').value = document.getElementById('col2_' + d).value;
					}
					else if(OPT == 'visa_sa'){
						var code = document.getElementById('col1_' + d).value;
						var no_of_visa = document.getElementById('col10_' + d).value;
						window.location.href = window.location.href + '&code=' + code + '&no_of_visa=' + no_of_visa;
					}
					else if(OPT == 'visa_kw'){
						var code = document.getElementById('col1_' + d).value;
						var no_of_visa = document.getElementById('col10_' + d).value;
						window.location.href = window.location.href + '&code=' + code + '&no_of_visa=' + no_of_visa;
					}
					else if(OPT == 'client_payment'){
						var client_id = document.getElementById('col1_' + d).value;
						var pp_no = document.getElementById('col3_' + d).value;
						window.location.href = window.location.href + '&client_id='+ client_id +'&pp_no=' + unescape(pp_no);
					}
					else if(OPT == 'cv_payment'){						
						var pp_no = document.getElementById('col1_' + d).value;
						window.location.href = window.location.href + '&pp_no=' + unescape(pp_no);
					}
					else if(OPT == 'sub_agent_payment'){
						var sub_agent_id = document.getElementById('col1_' + d).value;
						var pp_no = document.getElementById('col3_' + d).value;
						window.location.href = window.location.href + '&sub_agent_id='+ sub_agent_id +'&pp_no=' + unescape(pp_no);
					}
					
				}catch(e){ }
		
			}else{
				window.location.href = window.location.href + '&id=' + document.getElementById('id_' + d).value;			
			}			
			
			setTimeout("CloseSuggestionBox();",500);			
		}catch(e){ }
	}
	return true;
}
var sign = '+';
function getSign(obj,evt,sgn1,sgn2){
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	
	var chr = String.fromCharCode(charCode);
		
	if(charCode == 43 || chr == '+' || charCode == 80 || chr == 'P' || charCode == 112 || chr == 'p'){
		sign = '+';
		document.getElementById(sgn1).value = 'P';
		document.getElementById(sgn1+'_').innerHTML = 'P';
		
		document.getElementById(sgn2).value = 'P';
		document.getElementById(sgn2+'_').innerHTML = 'P';
		
	}else if(charCode == 45 || chr == '-' || charCode == 78 || chr == 'N' || charCode == 110 || chr == 'n'){
		sign = '-';
		document.getElementById(sgn1).value = 'N';
		document.getElementById(sgn1+'_').innerHTML = 'N';
		
		document.getElementById(sgn2).value = 'N';
		document.getElementById(sgn2+'_').innerHTML = 'N';
	}	 
		
	return true;
}

function ConvertData(obj,evt,opt,target_id,output_id,flag,max){
// 0*3'N-0*13'P
// 0,05N-0,21P	
//	alert(obj.value);	
//alert(flag);
	if(parseFloat(obj.value) >= max){
		obj.style.backgroundColor = '#F33';
		obj.value = '';
		document.getElementById(target_id).value = '';
	}	
		
	obj.value = obj.value.replace(/\-/gi,'');
	obj.value = obj.value.replace(/n/gi,'');
	
	obj.value = obj.value.replace(/\+/gi,'');
	obj.value = obj.value.replace(/p/gi,'');
	
	if(obj.value != '' && !isNaN(obj.value)){	
		obj.style.backgroundColor = '#EEE';
		document.getElementById(target_id).style.backgroundColor = '#EEE';	
		
		if(flag == 'false'){
			document.getElementById(target_id).value = parseFloat(obj.value);
		}
		else if(flag == 'true'){	
			
			if(opt == 'D-M'){
				var  val = Math.round((parseFloat(obj.value) / 60) * 100);
				if(val < 0){
					if(Math.abs(val) < 10)
					val = '-0' + Math.abs(val);
					else
					val = '-' + Math.abs(val);
				}
				else if(val < 10){
					val = '0' + val;
				}
				document.getElementById(target_id).value = val;
			}
			
			if(opt == 'D-D'){
				var  val = Math.round((parseFloat(obj.value) / 100) * 60);
				if(val < 0){
					if(Math.abs(val) < 10)
					val = '-0' + Math.abs(val);
					else
					val = '-' + Math.abs(val);
				}
				else if(val < 10){
					val = '0' + val;
				}
				document.getElementById(target_id).value = val;
			}		
		}
	
	}else{
		if(isNaN(obj.value)){
			document.getElementById(target_id).style.backgroundColor = '#F33';
		}
	//	document.getElementById(target_id).value = '';
		obj.value = '';
	}

	document.getElementById(output_id).value = sign + obj.value;
	
}


function ClearTxt(obj,val){
	obj.value = obj.value.replace(',','');
	if(obj.value == val){
		obj.value = '';
	}
}

function FillTxt(obj,val){	
	if(obj.value == ''){
		obj.value = val;
	}
}

function JSOptionDelete() {
	var yes_no = confirm("Are you sure you want to delete this record ?");
	
	if(yes_no) {
		return true;
	}else {
		return false;
	}
}

// Clock
function updateClock(targetID,datetime,opt){

	var currentTime = new Date();

	var currentDay = currentTime.getDay();
	var currentDate = currentTime.getDate();
	var currentMonth = currentTime.getMonth();
	var currentYear = currentTime.getFullYear();
	
	var currentHours = currentTime.getHours();
	var currentMinutes = currentTime.getMinutes();
	var currentSeconds = currentTime.getSeconds();

	var dayArray = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var monthArray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
	
	if(currentDate == 1){
		dateStr = "st";
	}else if(currentDate == 2){
		dateStr = "nd";
	}else if(currentDate == 3){
		dateStr = "rd";
	}else if(currentDate > 3){
		dateStr = "th";
	}
	
	// Pad the minutes and seconds with leading zeros, if required
	currentDate = (currentDate < 10 ? "0" : "") + currentDate;
	currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
	currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;	
	
	// Choose either "AM" or "PM" as appropriate
	var timeOfDay = (currentHours < 12) ? "AM" : "PM";

	// Convert the hours component to 12-hour format if needed
	currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

	// Convert an hours component of "0" to "12"
	currentHours = (currentHours == 0) ? 12 : currentHours;

	// Compose the string for display
	var currentTimeString = dayArray[currentDay] + ", " + currentDate + dateStr + " " + monthArray[currentMonth] + " " + currentYear + ", " + currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

	// Update the time display
	var DateTimeString = '';
	if(datetime == 'full'){
		DateTimeString = currentTimeString;
	}else if(datetime == 'dateOnly'){
		DateTimeString = currentYear + "-" + (currentMonth < 10 ? "0" : "") + currentMonth + "-" + currentDate;
	}else if(datetime == 'timeOnly'){
		DateTimeString = (currentTime.getHours() < 10 ? "0" : "") + currentTime.getHours() + ":" + currentMinutes + ":" + currentSeconds;
	}
	try{
		if(opt == 'input'){
			try{
				document.getElementById(targetID).value = DateTimeString;				
			}catch(e){
				
			}			
		}
		else if(opt == 'label'){
			var elms = document.getElementsByTagName('LABEL');
			
			for(var x=0;x<elms.length;x++){
				if(elms[x].className == targetID){
					elms[x].innerHTML = DateTimeString;
				}
				
			}
		//	document.getElementById(targetID).innerHTML = DateTimeString;			
		}
		
	}catch(e){
		
	}
	
}


function AddNew(url){
	window.location.href = url;
}

function AddRows(tab_id,tot_row,max_row){
	var TB = document.getElementById(tab_id);
	var n_rows = TB.rows.length;
	var n_cols = TB.rows[0].cells.length;
	
	if(n_rows <= max_row){
		var newTR = document.createElement('TR');
	
		for(var i=0;i<n_cols;i++){			
			var newTD = document.createElement('TD');
			newTD.innerHTML = TB.rows[n_rows-1].cells[i].innerHTML;
			
			try{
				var inputs = newTD.getElementsByTagName('INPUT');
				for(var h=0;h<inputs.length;h++){
					inputs[h].value = '';
				}
			}catch(e){
				
			}
			newTR.appendChild(newTD);
		}
	
		TB.appendChild(newTR);
		
		document.getElementById(tot_row).value = n_rows;
	}	
}

function RemoveRows(tab_id,rows,tot_row,max_row){
	var TB = document.getElementById(tab_id);
	var n_rows = TB.rows.length;	
	var lastTR = TB.rows[n_rows-1];	

	if(n_rows > max_row){
		TB.deleteRow(lastTR.rowIndex);
		
		document.getElementById(tot_row).value = (n_rows - max_row);
	}	
}

// Visa

function AddRowsVisa(tab_id,tot_row,max_row){
	var TB = document.getElementById(tab_id);
	var n_rows = TB.rows.length;
	var n_cols = TB.rows[0].cells.length;
	
	if(n_rows <= max_row){
		var newTR = document.createElement('TR');
	
		for(var i=0;i<n_cols;i++){
			var newTD = document.createElement('TD');
			
			if(i==0){
				newTD.style.textAlign = 'center';
				newTD.innerHTML = (n_rows + i) + '.';
			}else{
				newTD.innerHTML = TB.rows[n_rows-1].cells[i].innerHTML;
			}
						
			try{
				var inputs = newTD.getElementsByTagName('INPUT');
				for(var h=0;h<inputs.length;h++){					
					inputs[h].value = '';
					
					if(i==1){
						inputs[h].id = 'pp_no'+n_rows;						
						inputs[h].setAttribute('onkeyup','SuggestPassportNumVisa(this.value,event,\'src/ajax/Suggest_Passport_Num.class.php\',' + n_rows + ');');					
					}					
				}
			}catch(e){
				
			}
			newTR.appendChild(newTD);
		}
	
		TB.appendChild(newTR);
		
		document.getElementById(tot_row).value = n_rows;		
		document.getElementById('no_of_visa').value = n_rows;
	}	
}



function RemoveRowsVisa(tab_id,rows,tot_row,max_row){
	var TB = document.getElementById(tab_id);
	var n_rows = TB.rows.length;	
	var lastTR = TB.rows[n_rows-1];	

	if(n_rows > max_row){
		TB.deleteRow(lastTR.rowIndex);
		
		document.getElementById(tot_row).value = (n_rows - max_row);
		document.getElementById('no_of_visa').value = (n_rows - max_row);
	}	
}


function CreatChildAge(val,target_id){
	
	var AgeField = '';
	for(var k=0;k<val;k++){
		AgeField += '<input type="text" name="child_age'+k+'" id="child_age'+k+'" size="5" maxlength="2" />&nbsp;';
	}
	
	document.getElementById(target_id).innerHTML = AgeField;
}


function SelectMultiComboItem(id1,id2,arg,target){
	
	var combo1 = document.getElementById(id1);
	var combo2 = document.getElementById(id2);
	var len1 = combo1.options.length;
	var len2 = combo2.options.length;

	var flag1 = false;
	var flag2 = false;
	
	if(arg == 'add_one'){
		for(var x=0;x<len1;x++){
			var opt = combo1.options[x];
			
			if(opt.selected == true){				
				var newOpt = new Option();
   				newOpt.appendChild(document.createTextNode(opt.text));
   				newOpt.value = opt.value;
   				
   				for(var i=0;i<len2;i++){
   					if(combo2.options[i].text == opt.text){
   						flag1 = true;
   					}
   				}   				
   				if(flag1 != true){
   					combo2.appendChild(newOpt);
   				}
			}
		}
	}
	else if(arg == 'add_all'){	
		combo2.options.length = 0;	
		for(var x=0;x<len1;x++){
			var opt = combo1.options[x];

			var newOpt = new Option();
   			newOpt.appendChild(document.createTextNode(opt.text));
   			newOpt.value = opt.value;

   			combo2.appendChild(newOpt);		
		}
	}
	else if(arg == 'remove_one'){	
		var selected_opt = new Array();
		var k = 0;
		for(var x=0;x<len2;x++){
			var opt = combo2.options[x];

			if(opt.selected == true){
				selected_opt[k] = opt;
				k++;
			}
		}
		for(var j=0;j<selected_opt.length;j++){
			combo2.removeChild(selected_opt[j]);
		}
	}
	else if(arg == 'remove_all'){
		combo2.options.length = 0;
	}
	
	var selected_val = '';
	for(var z=0;z<combo2.options.length;z++){
		if(z==0)
		selected_val = combo2.options[z].value;
		else
		selected_val += ',' + combo2.options[z].value;
	}
	document.getElementById(target).value = selected_val;
}


function CalculateBalance(current_amt,x){

	var full_amount = document.getElementById('full_amount').value;
	var total_paid_amount = document.getElementById('total_paid_amount').value;
	var total_balance = document.getElementById('total_balance').value;
	
	
	var tot_paid_amt = 0;
	var paid_amt = 0;
	var n_pay = document.getElementById('n_pay').value;	

	if(!isNaN(current_amt)){
		if(current_amt == ''){
			current_amt = 0;
		}
		
				
		for(var t=0;t<n_pay;t++){
			if(t != x && x != null){
				paid_amt += parseFloat(document.getElementById('paid_amount'+t).value);				
			}
		}
				
		tot_paid_amt = parseFloat(paid_amt) + parseFloat(current_amt);
		final_balance = parseFloat(full_amount) - parseFloat(tot_paid_amt);		
		
		document.getElementById('total_paid_amount').value = parseFloat(tot_paid_amt).toFixed(2);
		document.getElementById('total_balance').value = parseFloat(final_balance).toFixed(2);
		
	}

}

function CalcBalance_FullAmt(full_amount){
	var total_paid_amount = document.getElementById('total_paid_amount').value;
	
	if(!isNaN(full_amount)){
		if(full_amount == ''){
			full_amount = 0;
		}
		final_balance = parseFloat(full_amount) - parseFloat(total_paid_amount);
		
		document.getElementById('total_balance').value = parseFloat(final_balance).toFixed(2);;
	}	
}

function OpenNewWindow(url,win_name){

	var screenWH = getWidthHeight().split('/');
	var screenWidth  =  screenWH[0];
	var screenHeight =  screenWH[1];
	
	//alert(screenHeight);

	var width = '1000';
	var height = '700';
	var toolbar = 'no';	
	var location = 'no';
	var directories = 'no';
	var status = 'no';
	var menubar = 'no';
	var scrollbars = 'no';
	var copyhistory = 'no';
	var fullscreen = 'yes';
	
	var top = (screenHeight - height) / 2;
	var left = (screenWidth - width) / 2;
	
	var resizable = 'no';
	
	var attibute = 'width='+ width +',height='+ height +',toolbar='+ toolbar +',location='+ location +',directories='+ directories +',status='+ status +',menubar='+ menubar +',scrollbars='+ scrollbars +',copyhistory='+ copyhistory +',resizable='+ resizable +',top='+ top +',left='+ left +',fullscreen='+ fullscreen +'';
	
	var new_win = window.open(url,win_name,attibute);
		
	
}

function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

