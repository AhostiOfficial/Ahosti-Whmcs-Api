<?php
/**
 * Ahosti DNS Activation
 *
 * @copyright Copyright (c) 2020, Ahosti Web Services.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package Ahosti.commands
 */
class AhostiDns {
	
	/**
	 * @var AhostiApi
	 */
	private $api;
	
	/**
	 * Sets the API to use for communication
	 *
	 * @param AhostiApi $api The API to use for communication
	 */
	public function __construct(AhostiApi $api) {
		$this->api = $api;
	}
	
	/**
	 * Activates the DNS service
	 *
	 * @param array $vars An array of input params including:
	 * 	- order-id Order Id of the Order for which the DNS service is to be activated
	 * @return AhostiResponse
	 */
	public function activate(array $vars) {
		return $this->api->submit("dns/activate", $vars);
	}
}
?>