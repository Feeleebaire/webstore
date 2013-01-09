<?php
/*
  LightSpeed Web Store
 
  NOTICE OF LICENSE
 
  This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@lightspeedretail.com <mailto:support@lightspeedretail.com>
 * so we can send you a copy immediately.
 
  DISCLAIMER
 
 * Do not edit or add to this file if you wish to upgrade Web Store to newer
 * versions in the future. If you wish to customize Web Store for your
 * needs please refer to http://www.lightspeedretail.com for more information.
 
 * @copyright  Copyright (c) 2011 Xsilva Systems, Inc. http://www.lightspeedretail.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 
 */
/**
 * UPS shipping module
 * Note: only works for US addresses
 *
 *
 */

class ups extends xlsws_class_shipping {
	public $service_types;

	protected $strModuleName = "UPS";

	/**
	 * make_ups_products populates with shipping options available through shipper
	 * @param &field (by reference)
	 * no return value since we're updating the reference
	 *
	 *
	 */
	protected function make_ups_products($field) {
		$this->service_types = array(
									'GND'=>'UPS Ground',
									'3DS'=>'UPS 3 Day Select',				
									'2DA'=>'UPS 2nd Day Air',
									'1DA'=>'UPS Next Day Air',
									'STD'=>'UPS Canada Standard' , 
									'XPR' => 'UPS Worldwide Express' ,
									'XDM' => 'UPS Worldwide Express plus' ,
									'XPD'=>'UPS Worldwide Expedited'
									  
									  );

		foreach($this->service_types as $type=>$desc)
			$field->AddItem( $desc , $type);
	}

	/**
	 * The Web Admin panel for configuring this shipping option
	 *
	 * @param $parentObj (shipping panel object)
	 * @return array
	 *
	 */
	public function config_fields($objParent) {
		$ret= array();

		$ret['label'] = new XLSTextBox($objParent);
		$ret['label']->Name = _sp('Label');
		$ret['label']->Required = true;
		$ret['label']->Text = $this->admin_name();

		$ret['originpostcode'] = new XLSTextBox($objParent);
		$ret['originpostcode']->Name = _sp('Origin Zip/Postal Code');
		$ret['originpostcode']->Required = true;

		$ret['origincountry'] = new XLSListBox($objParent);
		$ret['origincountry']->Name = _sp('Origin Country (USA ONLY)');
		$ret['origincountry']->AddItem('United States', 'US');
		$ret['origincountry']->Enabled = false;
		$ret['origincountry']->SelectedIndex = 0;

		$ret['defaultproduct'] = new XLSListBox($objParent);
		$ret['defaultproduct']->Name = _sp('Default Shipping Product');
		$this->make_ups_products($ret['defaultproduct']);

		$ret['ratecode'] = new XLSListBox($objParent);
		$ret['ratecode']->Name = _sp('Rate Code');
		$ret['ratecode']->AddItem('Regular Daily Pickup', 'Regular+Daily+Pickup');
		$ret['ratecode']->AddItem('On Call Air', 'On+Call+Air');
		$ret['ratecode']->AddItem('One Time Pickup', 'One+Time+Pickup');
		$ret['ratecode']->AddItem('Letter Center', 'Letter+Center');
		$ret['ratecode']->AddItem('Customer Counter', 'Customer+Counter');

		$ret['package'] = new XLSListBox($objParent);
		$ret['package']->Name = _sp('Packaging');
		$ret['package']->AddItem('Customer Packaging', 'CP');
		$ret['package']->AddItem('UPS Letter Envelope', 'ULE');
		$ret['package']->AddItem('UPS Tube', 'UT');
		$ret['package']->AddItem('UPS Express Box', 'UEB');
		$ret['package']->AddItem('UPS Worldwide 25 kilo', 'UW25');
		$ret['package']->AddItem('UPS Worldwide 10 kilo', 'UW10');

		$ret['restrictcountry'] = new XLSListBox($objParent);
		$ret['restrictcountry']->Name = _sp('Only allow '.$this->strModuleName.' to');
		$ret['restrictcountry']->AddItem('Everywhere (no restriction)', null);
		$ret['restrictcountry']->AddItem('My Country ('. _xls_get_conf('DEFAULT_COUNTRY').')', _xls_get_conf('DEFAULT_COUNTRY'));
		if (_xls_get_conf('DEFAULT_COUNTRY')=="US")
			$ret['restrictcountry']->AddItem('Continental US', 'CUS'); //Really common request, so make a special entry
		$ret['restrictcountry']->AddItem('North America (US/CA)', 'NORAM');
		$ret['restrictcountry']->Enabled = true;
		$ret['restrictcountry']->SelectedIndex = 0;
           		
		$ret['product'] = new XLSTextBox($objParent);
		$ret['product']->Name = _sp('LightSpeed Product Code (case sensitive)');
		$ret['product']->Required = true;
		$ret['product']->Text = 'SHIPPING';

		$ret['markup'] = new XLSTextBox($objParent);
		$ret['markup']->Name = _sp('Mark up ($)');
		$ret['markup']->Required = true;
		$ret['markup']->Text = 3.00;

		return $ret;
	}

	/**
	 * Check config fields
	 *
	 * The fields generated and returned in config_fields will be passed here for validity.
	 * Return true or false
	 *
	 * Admin panel will ONLY save field configs if all the fields are valid.
	 *
	 * @param $fields[]
	 * @return boolean
	 */
	public function check_config_fields($fields) {
		//check that postcode exists
		$val = $fields['originpostcode']->Text;
		if(trim($val) == '') {
			QApplication::ExecuteJavaScript("alert('Please provide postcode')");
			return false;
		}

		return true;
	}

	/**
	 * Customer fields
	 *
	 * Returns customer fields
	 *
	 * @param $parentObj (shipping panel object)
	 * @return array
	 */
	public function customer_fields($objParent) {
		$ret = array();
		$config = $this->getConfigValues(get_class($this));

		$ret['service'] = new XLSListBox($objParent,'ModuleMethod');
		$this->make_ups_products($ret['service']);
		//$ret['service']->Name = _sp('Preference:');
		$ret['service']->SelectedValue = $config['defaultproduct'];
		return $ret;
	}

	/**
	 * total
	 *
	 * Based on passed address information, calculates the total shipping cost
	 *
	 * @param $fields &array
	 * @param Cart $cart
	 * @param $country optional
	 * @param $zipcode optional
	 * @param $state optional
	 * @param $city optional
	 * @param $address2 optional
	 * @param $address1 optional
	 * @param $company optional
	 * @param $lname optional
	 * @param $fname optional
	 *
	 * @return array
	 */
	public function total($fields, $cart, $country = '', $zipcode = '', $state = '',
	$city = '', $address2 = '', $address1= '', $company = '', $lname = '', $fname = '') {

		$config = $this->getConfigValues(get_class($this));

		$weight = $cart->Weight;

		if(_xls_get_conf('WEIGHT_UNIT' , 'lb') != 'lb')
			$weight = $weight * 2.2;   // one KG is 2.2 pounds

		$length = $cart->Length;
		$width = $cart->Width;
		$height = $cart->Height;

		if(_xls_get_conf('DIMENSION_UNIT' , 'in') != 'in') {
			$length = round($length / 2.54);
			$width = round($width / 2.54);
			$height = round($height / 2.54);
		}

		$selected = $fields['service']->SelectedValue;

		if(empty($config['origincountry']) || empty($config['defaultproduct']))
			return false;
		
		//validate the product
		if($country != $config['origincountry']) {
			$config['defaultproduct'] = 'XPR';
			if(isset($fields['service']) && (substr($fields['service']->SelectedValue , 0 , 1) != 'X'))
				$fields['service']->SelectedValue = 'XPR';
		}


		$strShipData=serialize(array(__class__,$weight,$address1,$zipcode));
		$this->make_ups_products($fields['service']);
		if (_xls_stack_get('ShipBasedOn') != $strShipData) {
			_xls_stack_put('ShipBasedOn',$strShipData);
	




	
			$fields['service']->RemoveAllItems();
	
			$found = 0;
			$ret = array();
	
			$zipcode=str_replace(" ","",$zipcode); //Remove spaces i.e. canada Z1Z 1Z1 to Z1Z1Z1
			if (strtoupper($country)=="US")
				$zipcode=substr($zipcode,0,5); //UPS module doesn't support Zip+4 in US
	
	
	
			foreach($this->service_types as $type=>$desc) {
				$upsAction =  "3";
				$url = join(
					"&",
					array(
						"http://www.ups.com/using/services/rave/qcostcgi.cgi?accept_UPS_license_agreement=yes",
						"10_action=$upsAction",
						"13_product=" . $type,
						"14_origCountry=$config[origincountry]",
						"15_origPostal=".substr($config[originpostcode],0,5),
						"19_destPostal=".$zipcode,
						"22_destCountry=$country",
						"23_weight=" . $weight,
						"24_value=" . $cart->Total,
						"25_length=" . $length,
						"26_width=" . $width,
						"27_height=" . $height,
						"47_rateChart=$config[ratecode]",
						"48_container=$config[package]",
						"49_residential=1"
					)
				);
	
				$c = curl_init();
				curl_setopt($c, CURLOPT_URL, $url);
				curl_setopt($c, CURLOPT_HEADER, FALSE);
				curl_setopt($c, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($c, CURLOPT_RETURNTRANSFER, TRUE);
				$result = curl_exec($c);
				curl_close($c);
	
				$result=explode("%",$result);
				if(_xls_get_conf('DEBUG_SHIPPING' , false)) {
					_xls_log(get_class($this) . " sending ".$url,true);
					_xls_log(get_class($this) . " receiving ".print_r($result,true),true);
				}
	
				if(count($result) < 9)
					continue;
	
				$returnval = $result[10];
	
				$fields['service']->AddItem("$desc (" . _xls_currency(floatval($returnval)+ floatval($config['markup'])) . ")" , $type);
	
				$ret[$type] = floatval($returnval) + floatval($config['markup']);
	
				$found++;
			}
			
			if($found <=0) {
				_xls_log("UPS: Could not get ups rate $country , $zipcode .");
				$fields['service']->Visible = false;
				return false;
			}
			$fields['service']->Visible = true;
			_xls_stack_put('ShipBasedResults',serialize($ret));
		}
		else 
			$ret = unserialize(_xls_stack_get('ShipBasedResults'));
	
			
		$arr = array(
			'price' => false,
			'msg' => '',
			'markup' => floatval($config['markup']),
			'product' => $config['product']
		);

		if(isset($ret[$selected])) {
			$fields['service']->SelectedValue = $selected;
			$arr['price'] = $ret[$selected];
			$arr['msg'] = $this->service_types[$selected];
		} else {
			reset($ret);
			$selected = key($ret);
			$fields['service']->SelectedValue = $selected;
			$arr['price'] = $ret[$selected];
			$arr['msg'] = $this->service_types[$selected];
		}

		return $arr;
	}

	/**
	 * check() verifies nothing has changed in the configuration since initial load
	 * @return boolean
	 *
	 *
	 */
	public function check() {
		$vals = $this->getConfigValues(get_class($this));
		
		// if nothing has been configed return null
		if(!$vals || count($vals) == 0)
			return false;

		//Check possible scenarios why we would not offer this type of shipping
		if ($vals['restrictcountry']) { //we have a country restriction

			switch($vals['restrictcountry']) {
			case 'CUS':
				if ($_SESSION['XLSWS_CART']->ShipCountry=="US" &&
					($_SESSION['XLSWS_CART']->ShipState =="AK" || $_SESSION['XLSWS_CART']->ShipState=="HI"))
					return false;
				break;

			case 'NORAM':
				if ($_SESSION['XLSWS_CART']->ShipCountry != "US" && $_SESSION['XLSWS_CART']->ShipCountry != "CA")
					return false;
				break;

			default:
				if ($vals['restrictcountry']!=$_SESSION['XLSWS_CART']->ShipCountry) return false;
			}
		}

		return true;
	}

}