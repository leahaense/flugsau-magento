<?php
/**
 * You are allowed to use this API in your web application.
 *
 * Copyright (C) 2018 by customweb GmbH
 *
 * This program is licenced under the customweb software licence. With the
 * purchase or the installation of the software in your application you
 * accept the licence agreement. The allowed usage is outlined in the
 * customweb software licence which can be found under
 * http://www.sellxed.com/en/software-license-agreement
 *
 * Any modification or distribution is strictly forbidden. The license
 * grants you the installation in one application. For multiuse you will need
 * to purchase further licences at http://www.sellxed.com/shop.
 *
 * See the customweb software licence agreement for more details.
 *
*/

/**
 * @XmlType(name="dateTime", namespace="http://www.w3.org/2001/XMLSchema")
 */ 
class Customweb_Twint_Stubs_Org_W3_XMLSchema_DateTime implements Customweb_Xml_ISimpleType {
	
	/**
	 * @XmlTransient
	 * @var Customweb_Xml_Binding_DateHandler_DateTime
	 */
	private $__value = null;
	
	public function __construct() {
	}
	
	/**
	 * @return Customweb_Twint_Stubs_Org_W3_XMLSchema_DateTime
	 */
	public static function _() {
		$i = new Customweb_Twint_Stubs_Org_W3_XMLSchema_DateTime();
		return $i;
	}
	/**
	 * @return Customweb_Twint_Stubs_Org_W3_XMLSchema_DateTime
	 */
	public function set($value) {
		$this->__value = $value;
		return $this;
	}
	/**
	 * @return Customweb_Xml_Binding_DateHandler_DateTime
	 */
	public function get() {
		return $this->__value;
	}
	public function __toString() {
		return (string)$this->__value;
	}
	
}