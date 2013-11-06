<?php
namespace views;
class productHTMLView {

	public function render($controller) {
		
		return $controller->getProduct()->getName();

	}

}

