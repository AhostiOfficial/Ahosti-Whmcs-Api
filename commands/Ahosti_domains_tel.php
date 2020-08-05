<?php
/**
 * Ahosti Domain TEL Management
 *
 * @copyright Copyright (c) 2020, Ahosti Web Services.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package Ahosti.commands
 */
class AhostiDomainsTel {
	
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
	 * Gets the CTH Login Details for the specified .TEL Domain Registration Order.
	 *
	 * @param array $vars An array of input params including:
	 * 	- order-id Order Id of the .TEL Domain Registration Order.
	 * @return AhostiResponse
	 */
	public function cthDetails(array $vars) {
		return $this->api->submit("domains/tel/cth-details", $vars, "GET");
	}
	
	/**
	 * Modifies the Whois Preference of the .TEL Domain Registration Order.
	 *
	 * @param array $vars An array of input params including:
	 * 	- order-id Order Id of the Domain Registration Order for which you need to modify the Whois Preference.
	 * 	- whois-type It can be either Natural or Legal
	 * 	- publish Whether Whois details are to be published or not: Y/N. This parameter is required if whois-type parameter is Natural, otherwise is it Optional.
	 * @return AhostiResponse
	 */
	public function modifyWhoisPref(array $vars) {
		return $this->api->submit("domains/tel/modify-whois-pref", $vars);
	}
}
?>