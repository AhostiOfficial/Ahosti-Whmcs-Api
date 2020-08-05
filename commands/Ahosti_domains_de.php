<?php
/**
 * Ahosti Domain DE Management
 *
 * @copyright Copyright (c) 2020, Ahosti Web Services.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package Ahosti.commands
 */
class AhostiDomainsDe {
	
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
	 * Recheck zone configuration with .DE Registry of the expired .DE Domain Registration order.
	 *
	 * @param array $vars An array of input params including:
	 * 	- order-id Order Id of the .DE Domain Registration Order whose zone configuration needs to be rechecked.
	 * @return AhostiResponse
	 */
	public function recheckNs(array $vars) {
		return $this->api->submit("domains/de/recheck-ns", $vars);
	}
}
?>