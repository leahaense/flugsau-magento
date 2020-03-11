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
 * @BackendForm(-100)
 */
class Customweb_Twint_BackendOperation_Form_About extends Customweb_Payment_BackendOperation_Form_AbstractAbout {
	
	protected function getVersion() {
		return '4.0.105';	
	}
	
	protected function getReleaseDate() {
		return 'Mon, 17 Feb 2020 08:48:53 +0100';
	}
	
	protected function getOrderNumber() {
		return '100017567';
	}
}