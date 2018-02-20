var xmlHttp;

function LoadAllInvoice() {

	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null)
	{
		  alert ("Browser does not support HTTP Request");
		  return;
	}
		
	document.getElementById('filter_invoice_no').value = '';
	
	var url = "src/ajax/Load_All_Invoice.class.php";
//	url = url + "?main_combo_id=" + main_combo_id;
//	alert(url);
	xmlHttp.onreadystatechange = LoadAllInvoiceStateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);		
	
	
}
function LoadAllInvoiceStateChanged()
{
		
	if(xmlHttp.readyState < 4 )	{
		document.getElementById('item_list_area').innerHTML = '<img src="images/ajax-loader.gif" width="16" height="16" border="0" align="absmiddle" /> <span class="label_style">Loading...</span>';
	}else{
		document.getElementById('item_list_area').innerHTML = '';
	}
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
		var response = xmlHttp.responseText;
		
	//	alert(response);
		
		var item_list_area = document.getElementById('item_list_area');
		
		if(response != 'no'){
			var responseArr = response.split('|');
			
			if(responseArr.length != 0){				
				
				var TB = '<table id="item_list_tab" width="100%" border="0" cellspacing="0" cellpadding="0" class="item_list_tab">';
				
				TB += '<tr>'+
						'<th width="9%" class="top_left">#</th>'+
						'<th width="25%">Invoice No.</th>'+						
						'<th width="46%">Customer</th>'+
						'<th width="20%" class="top_right" style="border-right: none;">Date</th>'+
					  '</tr>';
			
				for(var k=0;k<responseArr.length;k++){
					var split = responseArr[k].split('@');
					var invoice_arr = split[0].split('~');
					var invoice_id = invoice_arr[0];
					var invoice_no = invoice_arr[1];
					var invoice_date = invoice_arr[2];
					var customer_id = invoice_arr[3];
					var customer_name = invoice_arr[4];
					
					var transport_charge = invoice_arr[5];
					var other_charge = invoice_arr[6];
					
					var delivery_date = invoice_arr[7];
					var delivery_time = invoice_arr[8];
					var delivery_address = invoice_arr[9];
					
					var is_advanced_paid = invoice_arr[10];
					var advanced_paid = invoice_arr[11];
					var is_refundable_deposit = invoice_arr[12];
					var refundable_deposit = invoice_arr[13];
					var invoice_remarks = invoice_arr[14];
					
					var total_amount = invoice_arr[15];
					var grand_total = invoice_arr[16];
					var paid_amount = invoice_arr[17];
					var balance_amount = invoice_arr[18];					
					
					var item_str = split[1];							
					
					TB += '<tr id="filter_item_tr'+ k +'" onclick="javascript:SelectInvoiceItem(\''+ k +'\',this.id);">'+
							'<td align="right" nowrap>'+ (k+1) +'.<input type="hidden" name="invoice_id'+ k +'" id="invoice_id'+ k +'" value="'+ invoice_id +'" /></td>'+
							'<td nowrap>'+ invoice_no +'<input type="hidden" name="invoice_no'+ k +'" id="invoice_no'+ k +'" value="'+ invoice_no +'" />'+
														'<input type="hidden" name="invoice_date'+ k +'" id="invoice_date'+ k +'" value="'+ invoice_date +'" />'+														
														'<input type="hidden" name="customer_id'+ k +'" id="customer_id'+ k +'" value="'+ customer_id +'" />'+
														'<input type="hidden" name="customer_name'+ k +'" id="customer_name'+ k +'" value="'+ customer_name +'" />'+
														
														'<input	type="hidden" name="transport_charge'+ k +'" id="transport_charge'+ k +'" value="'+ transport_charge +'" />'+
														'<input	type="hidden" name="other_charge'+ k +'" id="other_charge'+ k +'" value="'+ other_charge +'" />'+
														
														'<input	type="hidden" name="delivery_date'+ k +'" id="delivery_date'+ k +'" value="'+ delivery_date +'" />'+
														'<input	type="hidden" name="delivery_time'+ k +'" id="delivery_time'+ k +'" value="'+ delivery_time +'" />'+
														'<input	type="hidden" name="delivery_address'+ k +'" id="delivery_address'+ k +'" value="'+ delivery_address +'" />'+
														
														'<input	type="hidden" name="is_advanced_paid'+ k +'" id="is_advanced_paid'+ k +'" value="'+ is_advanced_paid +'" />'+
														'<input	type="hidden" name="advanced_paid'+ k +'" id="advanced_paid'+ k +'" value="'+ advanced_paid +'" />'+
														'<input	type="hidden" name="is_refundable_deposit'+ k +'" id="is_refundable_deposit'+ k +'" value="'+ is_refundable_deposit +'" />'+
														'<input	type="hidden" name="refundable_deposit'+ k +'" id="refundable_deposit'+ k +'" value="'+ refundable_deposit +'" />'+														
														'<input type="hidden" name="invoice_remarks'+ k +'" id="invoice_remarks'+ k +'" value="'+ invoice_remarks +'" />'+
														
														'<input	type="hidden" name="total_amount'+ k +'" id="total_amount'+ k +'" value="'+ total_amount +'" />'+														
														'<input	type="hidden" name="grand_total'+ k +'" id="grand_total'+ k +'" value="'+ grand_total +'" />'+
														'<input	type="hidden" name="paid_amount'+ k +'" id="paid_amount'+ k +'" value="'+ paid_amount +'" />'+
														'<input	type="hidden" name="balance_amount'+ k +'" id="balance_amount'+ k +'" value="'+ balance_amount +'" />'+
																												
														'<input type="hidden" name="item_str'+ k +'" id="item_str'+ k +'" value="'+ item_str +'" /></td>'+
							'<td>'+ customer_name +'</td>'+
							'<td nowrap style="border-right: none; text-align: right; padding-right: 10px;">'+ invoice_date +'</td>'+
						  '</tr>';
				}
				
				TB += '</table>';
				
				item_list_area.innerHTML = TB;
			
			}else{
				item_list_area.innerHTML = 'There are no Invoice found from the selection';
			}
			
		}else{
			item_list_area.innerHTML = 'There are no items Invoice from the selection';
		}
	}
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	try{
	 
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
