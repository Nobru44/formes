<?php 


class Triangle extends Shape {
	

	public $point2;
	public $point3;


	function __construct($point2, $point3) {
		
		parent::__construct();

		$this->point2 = $point2;
		$this->point3 = $point3;
		
	}
	
	public function Draw() {
		$svg = <<<TXT

	<polygon points="{$this->x} {$this->y}, {$this->point2->x} {$this->point2->y}, {$this->point3->x} {$this->point3->y}" fill="{$this->color}" fill-opacity="{$this->transparence}" />

TXT;
		return $svg;
	}
}