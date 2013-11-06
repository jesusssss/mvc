<?php
class newsModel {
	private $headline;
	private $id;
	private $teaser;
	private $image;
	private $nyhed;
	
	public function __construct($headline, $id, $teaser, $image, $nyhed) {
		$this->headline = $headline;
		$this->id = $id;
		$this->teaser = $teaser;
		$this->image = $image;
		$this->nyhed = $nyhed;
	}
	
	public function getHeadline() {
		return $this->headline;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getTeaser() {
		return $this->teaser;
	}
	
	public function getImage() {
		return $this->image;
	}

	public function getNyhed() {
		return $this->nyhed;
	}
	
	
	
}