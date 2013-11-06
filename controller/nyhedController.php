<?php

class nyhedController {
	private $request;
	private $nyhed;
	
	public function __construct($request) {
		$this->request = $request;
	}

	public function default_event() {
		if(!isset($this->request["nyhedid"])) {
			die("No nyhedid");
		}
		$this->nyhed = nyhedGateway::getNyhed($this->request["nyhedid"]);
	}
	
	
	
	public function getNyhed() {
		return $this->nyhed;
	}

}