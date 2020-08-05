<?php
/**
 * Ahosti Contact CA Management
 *
 * @copyright Copyright (c) 2020, Ahosti Web Services.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package Ahosti.commands
 */
class AhostiContactsDotca {
	
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
	 * Gets the Registrant Agreement mandated by the Canadian Internet Registration Authority (CIRA).
	 * 
	 * @return AhostiResponse
	 */
	public function registrantagreement(array $vars) {
		return $this->api->submit("contacts/dotca/registrantagreement", $vars, "GET");
	}
}
?>