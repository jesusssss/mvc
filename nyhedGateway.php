<?php

class nyhedGateway {
	static function getNyhed($id) {
		return new newsModel("I am a headline",$id,"add some text for a teaser","Image","Newscontent");
	}
	
	static function saveNyhed() {
		
	}
	
	static function newNyhed() {
	
	}
}