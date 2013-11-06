<?php
class nyhedHTMLView {

	public function render($controller) {
		$nyhedHeadline = $controller->getNyhed()->getHeadline();
		$nyhedTeaser = $controller->getNyhed()->getTeaser();
		$nyhedImage = $controller->getNyhed()->getImage();
		$nyhedContent = $controller->getNyhed()->getNyhed();
		$nyhed = $nyhedHeadline." <br /> ".$nyhedTeaser."<br />".$nyhedImage."<br />".$nyhedContent;
		return $nyhed;

	}

}