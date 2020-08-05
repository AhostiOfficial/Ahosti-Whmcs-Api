<?php
/**
 * Ahosti Domain UK Management
 *
 * @copyright Copyright (c) 2020, Ahosti Web Services.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package Ahosti.commands
 */
class AhostiDomainsUk {
	
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
	 * Releases (transfers out) the specified .UK domain name to the specified Registrar.
	 *
	 * @param array $vars An array of input params including:
	 * 	- order-id Order Id of the Domain Registration Order which you want to release (transfer out).
	 * 	- new-tag Tag name of the new Registrar.
	 * @return AhostiResponse
	 */
	public function release(array $vars) {
		return $this->api->submit("domains/uk/release", $vars);
	}
}
?>