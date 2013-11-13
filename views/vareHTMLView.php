<?php
namespace views;
class vareHTMLView {

	public function render($controller) {
		
		return $controller->getProduct()->getName();

	}

}

