<?php
require_once('../utility/DBConstants.class.php');
require_once('../platform/DBConnection.class.php');
require_once('../dao/Invoice_Detail.class.php');
require_once('../dao/Invoice_Item.class.php');
require_once('../dao/Client.class.php');
require_once('../dao/Item.class.php');
require_once('../dao/Stock.class.php');
require_once('../dao/Payment.class.php');

class Load_All_Invoice {

	public static function Load() {

		$result_string = "";

		$invoice_detail = new Invoice_Detail();
		$invoice_detailDao = new Invoice_DetailDaoImpl();

		$invoice_item = new Invoice_Item();
		$invoice_itemDao = new Invoice_ItemDaoImpl();

		$customer = new Client();
		$customerDao = new ClientDaoImpl();

		$item = new Item();
		$itemDao = new ItemDaoImpl();

		$stock = new Stock();
		$stockDao = new StockDaoImpl();
		
		$payment = new Payment();
		$paymentDao = new PaymentDaoImpl();

		$invoice_detail_list = $invoice_detailDao->getAllInvoice_Detail_By_Delivery_Status_ORDER_BY_DESC_Invoice_date("pending");

		if($invoice_detail_list != NULL){

			for($t=0;$t<count($invoice_detail_list);$t++){
				$invoice_detailArr = $invoice_detail_list[$t];
				//	$invoice_Arr = new Invoice_Detail();
				$invoice_id = $invoice_detailArr->getId();
				$invoice_no = $invoice_detailArr->getInvoice_no();
				$invoice_date = $invoice_detailArr->getInvoice_date();
				$invoice_customer_id = $invoice_detailArr->getCustomer_id();
				$transport_charge = $invoice_detailArr->getTransport_charge();
				$other_charge = $invoice_detailArr->getOther_charge();
				$delivery_date = $invoice_detailArr->getDelivery_date();
				$delivery_time = $invoice_detailArr->getDelivery_time();
				$delivery_address = $invoice_detailArr->getDelivery_address();
				$is_advanced_paid = $invoice_detailArr->getIs_advanced_paid();
				$advanced_paid = $invoice_detailArr->getAdvanced_paid();
				$is_refundable_deposit = $invoice_detailArr->getIs_refundable_deposit();
				$refundable_deposit = $invoice_detailArr->getRefundable_deposit();
				$invoice_remarks = $invoice_detailArr->getRemarks();

				$customer_name = "";
				$customer_list = $customerDao->getAllClientById_Status($invoice_customer_id);
				if($customer_list != NULL){
					$customer_name = $customer_list->getName();
					$company_name = $customer_list->getCompany();
				}

				$ItemStr = "";

				$TotalAmount = 0;
				$GrandTotal = 0;
				$BalanceAmount = 0;

				$invoice_item_list = $invoice_itemDao->getInvoice_Item_By_Invoice_id($invoice_id);
				if($invoice_item_list != NULL){
					for($i=0;$i<count($invoice_item_list);$i++){
						$invoice_itemArr = $invoice_item_list[$i];
						$invoice_item_id = $invoice_itemArr->getId();
						$invoice_item_item_id = $invoice_itemArr->getItem_id();
						$invoice_item_qty = $invoice_itemArr->getQty();
						$invoice_item_return_qty = $invoice_itemArr->getReturn_qty();
						$invoice_item_damage_qty = $invoice_itemArr->getDamage_qty();
						$invoice_item_unit_cost = $invoice_itemArr->getUnit_cost();
						$invoice_item_amount = $invoice_itemArr->getAmount();
						$invoice_item_invoice_status = $invoice_itemArr->getInvoice_status();

						if($invoice_item_invoice_status != "done"){
							$item_list = $itemDao->getAllItemById_Status($invoice_item_item_id);
							if($item_list != NULL){
								$item_serial_no = $item_list->getSerial_no();
								$item_name = $item_list->getName();

								if($ItemStr == "")
								$ItemStr = $invoice_item_item_id."~".$item_serial_no."~".$item_name."~".$invoice_item_qty."~".number_format($invoice_item_unit_cost, 2)."~".number_format($invoice_item_amount, 2);
								else
								$ItemStr .= "^".$invoice_item_item_id."~".$item_serial_no."~".$item_name."~".$invoice_item_qty."~".number_format($invoice_item_unit_cost, 2)."~".number_format($invoice_item_amount, 2);
							}
						}
						$TotalAmount += $invoice_item_amount;
					}
				}
				$total_paid_amount = 0;
				$payment_list = $paymentDao->getTotPayment_By_Invoice_id($invoice_id);
				if($payment_list != NULL){
					$total_paid_amount = $payment_list->getTot_amount();
				}

				$GrandTotal = $TotalAmount + $transport_charge + $other_charge;
				$BalanceAmount = $GrandTotal - ($advanced_paid + $total_paid_amount);

				if($ItemStr != ""){
					if($invoice_str == "")
					$invoice_str = $invoice_id."~".$invoice_no."~".date("d-M-Y",strtotime($invoice_date))."~".$customer_id."~".$customer_name."~".number_format($transport_charge,2)."~".number_format($other_charge,2)."~".date("d-F-Y",strtotime($delivery_date))."~".date("h:i a",strtotime($delivery_time))."~".$delivery_address."~".$is_advanced_paid."~".number_format($advanced_paid,2)."~".$is_refundable_deposit."~".number_format($refundable_deposit,2)."~".$invoice_remarks."~".number_format($TotalAmount,2)."~".number_format($GrandTotal,2)."~".number_format($total_paid_amount,2)."~".number_format($BalanceAmount,2)."@".$ItemStr;
					else
					$invoice_str .= "|".$invoice_id."~".$invoice_no."~".date("d-M-Y",strtotime($invoice_date))."~".$customer_id."~".$customer_name."~".number_format($transport_charge,2)."~".number_format($other_charge,2)."~".date("d-F-Y",strtotime($delivery_date))."~".date("h:i a",strtotime($delivery_time))."~".$delivery_address."~".$is_advanced_paid."~".number_format($advanced_paid,2)."~".$is_refundable_deposit."~".number_format($refundable_deposit,2)."~".$invoice_remarks."~".number_format($TotalAmount,2)."~".number_format($GrandTotal,2)."~".number_format($total_paid_amount,2)."~".number_format($BalanceAmount,2)."@".$ItemStr;
				}
			}
		}

		if($invoice_str != ""){
			$result_string = $invoice_str;
		}else{
			$result_string = "no";
		}

		echo $result_string;
	}
}
$resposeText = Load_All_Invoice::Load();
echo $resposeText;
?>