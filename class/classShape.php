<?php

abstract class Shape {
	public $color;
	public $y;
	public $x;
	public $transparence;


	function __construct() {
		$this->color = 'black';
		$this->y = 0;
		$this->x = 0;
		$this->transparence = 1;
	}
	public function setPosition ($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}
	public function setColor ($color) {
		$this->color = $color;
	}
	public function setOpacity ($transparence) {
		$this->transparence = $transparence;
	}
	abstract function draw(); 
}