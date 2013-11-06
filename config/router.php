<?php
namespace config;
class router {
	
	public function __construct($request) {
		if(!isset($request["controller"])) {
			die("No Controller");
		}
		if(!isset($request["view"])) {
			$view = 'HTML';
		} else {
			$view = $request["view"];
		}
		
		$controller = $request["controller"]."Controller";
		$controlObj = new $controller($request);
		
		$view = $request["controller"].$view."View";
		$viewObj = new $view();
		
		if(isset($request["event"])) {
			$event = $request["event"]."_event";
		} else {
			$event = 'default_event';
		}
		
		$controlObj->$event();
		echo $viewObj->render($controlObj);
	}
}