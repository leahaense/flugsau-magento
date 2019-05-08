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
 *
 * @category	Customweb
 * @package		Customweb_TwintCw
 * 
 */

namespace Customweb\TwintCw\Model\Authorization\Method;

class Moto extends AbstractMethod
{
	protected function getAdapterInterfaceName()
	{
		return 'Customweb_Payment_Authorization_Moto_IAdapter';
	}

	protected function getAliasFormField() {
		
	}

	public function getHiddenFormFields()
	{
		$result = $this->getAdapter()->getParameters($this->getContext()->getTransaction()->getTransactionObject());
		$this->getContext()->getTransaction()->save();
		return $result;
	}

	/**
	 * @return \Customweb_Payment_Authorization_Moto_IAdapter
	 */
	public function getAdapter()
	{
		return parent::getAdapter();
	}
}