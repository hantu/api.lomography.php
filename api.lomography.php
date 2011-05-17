<?php

class Lomography {
		
	/**
	 * API key for Lomography.com
	 * Get it from http://api.lomography.com/
	 *
	 * @var string
	 **/
	private $apiKey = '';
	
	public function __construct($apiKey = null) {
		$this->apiKey = $apiKey;
	}
	
	/**
	 * 
	 */
	public function popular($page = null) {
		
	}
	
	/**
	 * 
	 */
	public function recent($page = null) {
		
	}
	
	/**
	 * 
	 */
	public function cameras($page = null) {
		
	}
	
	/**
	 * 
	 */
	public function films($page = null) {
		
	}
	
	/**
	 * 
	 */
	public function locations() {
		
	}
	
	/**
 	 * Single function to deal with sending cURL requests
	 * to the URL specified
	 *
	 * @param string $url the url to send the curl requests
	 * @return void
	 **/
	private function request($url)
	{
		$curl_handler = curl_init();

		$url = $url . "&api_key=" . $this->apikey;

		curl_setopt($curl_handler, CURLOPT_URL, $url);
		curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, 1);

		$response = curl_exec($curl_handler);

		curl_close($curl_handler);

		if ($response !== false)
		{
			return $response;
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * Prepare the JSON data as an array
	 *
	 * @param string $json the json response
	 * @return object variable
	 **/
	private function process($data) {
		return json_decode($data, true);
	}
	
}

?>
