<?php 

class Canvas {
	public $width;
	public $height;
	public $background;
	protected $shapes = [];


	function __construct() {
		$this->width = 800;
		$this->height = 800;
		$this->background = 'white';
	}
	
	public function addShape ($shape) {
	    $this->$shapes = $shape;
	}
	public function Draw($shapes) {
 
		foreach ($shapes AS $shape) {



		}
	}
}