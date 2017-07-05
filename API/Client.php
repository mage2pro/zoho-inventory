<?php
namespace Dfe\ZohoInventory\API;
// 2017-07-05
final class Client extends \Df\Zoho\API\Client {
	/**
	 * 2017-07-05
	 * @override
	 * @see \Df\API\Client::uriBase()
	 * @used-by \Df\API\Client::p()
	 * @return string
	 */
	protected function uriBase() {return 'https://inventory.zoho.com/api/v1';}
}
